<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['category', 'title', 'summary', 'description', 'photos', 'location', 'amount', 'square_meter'];

    protected $casts = [
        'photos' => 'array',
    ];
}
