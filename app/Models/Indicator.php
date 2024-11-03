<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Indicator extends Model
{
    protected $fillable = ['name', 'expected_value', 'min_value', 'max_value'];
}
