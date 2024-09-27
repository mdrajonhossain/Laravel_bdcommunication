<?php

namespace App\Imports;

use App\Models\EmailList;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Facades\Auth;

class EmailsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new EmailList([
            'emails'   => trim($row[0]),
            'user_id'  => Auth::id(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
