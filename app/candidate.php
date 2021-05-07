<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class candidate extends Model
{
    protected $fillable = [
        'name','surname','phone','date','rating'
    ];
}
