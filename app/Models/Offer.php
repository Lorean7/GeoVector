<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'category_id',
        'name',
        'price',
        'vendor',
        'currency_id',
        'description',
        'specifications',
        'vendorCode',
        'width',
        'length',
        'height',
        'weight',
        'quantity',
        'pictures'
        
    ];
}
