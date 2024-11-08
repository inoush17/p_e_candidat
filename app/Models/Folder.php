<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Folder extends Model
{
    use HasFactory;

    protected $fillable = [
        'last_name',
        'first_name',
        'email',
        'date_of_birth',
        'phone_number',
        'nationality',
        'neighborhood',
        'sex',
        'marital_status',
        'statuts',
        'birth_certificate',
        'identity_card',
        'latest_bulletin',
        'cover_letter',
        'file_annex',
    ];
}
