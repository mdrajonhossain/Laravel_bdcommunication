<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Http\Controllers\SmtpsController; // Update with the correct namespace
class SmtpSent extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'smtp:SmtpSent';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send emails using user-specific SMTP settings';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $controller = new SmtpsController(); // Update with your controller name
        $controller->Smtp_Sent();
        $controller->limit(); // Call the limit method from SmtpsController
        $controller->MCCom(); // Call the limit method from SmtpsController
        $controller->messagestatus(); // Call the limit method from SmtpsController
    }
}
