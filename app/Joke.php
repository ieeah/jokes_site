<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Joke extends Model
{
    // Mass assignment protection

    protected $fillable = [
        'author',
        'title',
        'body',
    ];
}
