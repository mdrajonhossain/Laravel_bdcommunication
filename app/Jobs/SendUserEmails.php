<?php

namespace App\Jobs;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Models\User;
use App\Models\EmailList;
use Illuminate\Support\Facades\DB;

class SendUserEmails implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function handle()
    {
        $smtp = DB::table('smtps')->where('user_id', $this->user->id)->first();

        if ($smtp) {
            $mail = new PHPMailer(true);
            try {
                // Server settings
                $mail->SMTPDebug = 0;
                $mail->isSMTP();
                $mail->Host       = $smtp->hostname;
                $mail->SMTPAuth   = true;
                $mail->Username   = $smtp->email;
                $mail->Password   = $smtp->password;
                $mail->SMTPSecure = 'tls';
                $mail->Port       = $smtp->port;
                
                $mail->MIMEHeader = preg_replace('/^X-Mailer:.*?\r\n/m', '', $mail->MIMEHeader);
                $mail->setFrom($smtp->email, "Rrr");

                $emailList = DB::table('email_lists')->where('user_id', $this->user->id)->where('status', 0)->get();
                foreach ($emailList as $email) {
                    $mail->addAddress($email->email);
                    $mail->isHTML(true);
                    $mail->Subject = 'Here is the subject';
                    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
                    $mail->send();
                    EmailList::where('id', $email->id)->update(['status' => 1]);
                    $mail->clearAddresses();
                }

            } catch (Exception $e) {
                // Handle the exception
            }
        }
    }
}
