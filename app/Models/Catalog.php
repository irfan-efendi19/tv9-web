<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Catalog extends Model
{
    protected $fillable = [
        'title',
        'description',
        'category',
        'image_url',
    ];
}
