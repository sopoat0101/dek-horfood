<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class food extends Model
{
    protected $fillable = [
        'name', 'ingradient', 'howto', 'uid', 'view'
    ];
    protected $table = 'food';
}
