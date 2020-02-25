<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'name', 'author',
    ];
    public function phone ()
    {
        return $this->hasOne(Phone::class);
    }
}
