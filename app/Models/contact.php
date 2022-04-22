<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
    use HasFactory;
    protected $table = 'contacts';

    protected $fillable = [
        'name',
        'email',
        'mobile',
        'subject',
        'message',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        ];

}
