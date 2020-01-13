<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class agency extends Model
{
        public $timestamps = false;
    protected $table ='agencies2';
    

    protected $fillable = ' listofagencyname';
}
