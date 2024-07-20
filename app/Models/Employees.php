<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Employees extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'date_of_birth',
        'email',
    ];

    public function sales(): HasMany
    {
        return $this->hasMany(Sales::class);
    }

    // CHANGE - Removed $timestamps = false since timestamps are now columns in the table
    // public $timestamps = false; 
}
