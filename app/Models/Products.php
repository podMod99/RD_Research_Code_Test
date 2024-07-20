<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Products extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'original_price',
        'discount_20_percent_when_over_price',
    ];



    // CHANGE - Each product can be sold multiple times in different sales, so this is a one-to-many relationship. I.e, a product can be associated with many sales
    // public function sales(): BelongsTo
    // {
    //     return $this->belongsTo(Sales::class);
    // }
    public function sales(): HasMany
    {
        return $this->hasMany(Sales::class);
    }

    // CHANGE - Removed $timestamps = false since timestamps are now columns in the table
    // public $timestamps = false; 
}
