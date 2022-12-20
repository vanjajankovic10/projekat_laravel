<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable =[
        'title',
        'description',
        'number of pages',
        'author_id',
        'publisher_id',
        'genre_id',
    ];
}
