<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'name',
        'address',
        'city',
        'state',
        'pincode',
        'phone',
        'coupon_id',
        'coupon_code',
        'coupon_value',
        'ref_id',
        'order_status',
        'payment_mode',
        'payment_status',
        'transaction_id',
        'user_id',
        'terms',
        'total'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
     ];


}
