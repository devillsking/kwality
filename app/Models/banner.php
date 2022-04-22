<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class banner extends Model
{
    use HasFactory;
    protected $table = 'banners';

    protected $fillable = [
        'title',
        'slug',
        'image',
        'type',
        'status'
    ];

   protected $dates = [
        'created_at',
        'updated_at',
    ];

}
