<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

class Song extends Model
{
    protected $fillable = ['title'];
    protected $collection = 'songs';
}
