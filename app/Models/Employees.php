<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    use HasFactory;

    // CHANGE - Custom primary key to reflect CSV data
    protected $primaryKey = 'employee_id';

    protected $fillable = [
        'first_name',
        'last_name',
        'date_of_birth',
        'email',
    ];

    // CHANGE - Removed $timestamps = false since timestamps are now columns in the table
    // public $timestamps = false; 
}
