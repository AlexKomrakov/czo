<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{

    protected $fillable = ['id', 'title', 'description', 'body'];
    public $timestamps = false;

}
