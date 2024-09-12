<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MessageNotification extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'message',
    ];
    protected function casts(): array
    {
        return [
            'message' => '',
        ];
    }
}
