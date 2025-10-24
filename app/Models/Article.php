<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
     use HasFactory;
    /**
     * Les attributs qu’on peut remplir avec create() ou update()
     */
    protected $table = 'articles';
    protected $fillable = [
        'title',
        'body',
    ];
}
