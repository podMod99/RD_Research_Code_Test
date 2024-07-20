<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Sales extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee',
        'date_time_of_sale',
        'sale_price',
        'product_id',
    ];

    public function employees(): BelongsTo
    {
        return $this->belongsTo(Employees::class);
    }

    // CHANGE - Sales has a belongs to relationship with products. Each sale belongs to one product
    // public function products(): HasMany
    // {
    //     return $this->hasMany(Product::class);
    // }
    public function products(): BelongsTo
    {
        return $this->belongsTo(Products::class);
    }

    // CHANGE - Removed $timestamps = false since timestamps are now columns in the table
    // public $timestamps = false; 
}
