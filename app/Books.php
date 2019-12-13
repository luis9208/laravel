<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    //
    protected $fillable = [
        'title', 'description', 'author', 'public_year'
    ];

    protected $guarded = ['id'];
}
