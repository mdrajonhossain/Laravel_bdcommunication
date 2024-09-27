<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MessageLead extends Model
{
    protected $fillable = [
        'email',
        'first_name',
        'last_name',
        'status',
        'message_id',
        'user_id',
        'open', // Add 'open' here
    ];
}
