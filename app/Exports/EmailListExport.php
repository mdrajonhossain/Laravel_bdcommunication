<?php

namespace App\Exports;

use App\Models\EmailList;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class EmailListExport implements FromCollection, WithHeadings
{
    protected $user;

    public function __construct($user)
    {
        $this->user = $user;
    }

    public function collection(): Collection
    {
        // Fetch the authenticated user's email lists
        $emailLists = $this->user->emailLists()->select('email', 'first_name', 'last_name', 'company', 'website')->get();

        // Return the collection
        return $emailLists;
    }

    public function headings(): array
    {
        return [
            'Email',
            'First Name',
            'Last Name',
            'Company',
            'Website',
        ];
    }
}
