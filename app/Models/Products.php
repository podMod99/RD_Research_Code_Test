<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    // CHANGE - Custom primary key to reflect CSV data
    protected $primaryKey = 'product_id';

    protected $fillable = [
        'name',
        'original_price',
        'discount_20%_when_over_price',
    ];

    // CHANGE - Removed $timestamps = false since timestamps are now columns in the table
    // public $timestamps = false; 
}
