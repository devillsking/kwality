<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class plan extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $table = 'plans';

    protected $fillable = [
        'name',
        'sku',
        'slug',
        'keyword',
        'video',
        'pdf',
        'price',
        'sell_price',
        'plan_image',
        'elevation_image',
        'width',
        'height',
        'vastu',
        'faces',
        'parking',
        'bhk',
        'floor',
        'swiming_pool',
        'plot',
        'like',
        'rating',
        'column_placement',
        'door_size',
        'window_size',
        'ventilation_size',
        'short_description',
        'long_description',
        'activated',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
     ];
}
