<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee',
        'date_time_of_sale',
        'sale_price',
        'product_id',
    ];

    // CHANGE - Removed $timestamps = false since timestamps are now columns in the table
    // public $timestamps = false; 
}
