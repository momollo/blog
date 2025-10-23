<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    /**
     * Les attributs qu’on peut remplir avec create() ou update()
     */
    protected $fillable = [
        'title',
        'content',
        'author',
        'is_published',
    ];
}
