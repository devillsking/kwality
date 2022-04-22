<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $table = 'payments';

    protected $fillable = [
        'r_payment_id', 'user_id','plan_id','amount'
         ];

    protected $dates = [
        'created_at',
        'updated_at',
     ];
}
