<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    protected $fillable = [
        'title',
        'description',
        'category',
        'start_time',
        'end_time',
        'day_of_week',
    ];
}