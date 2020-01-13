<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    public $timestamps = false;
    protected $table = 'agencies';
    

    protected $fillable = ['name','projecttitle','projectleader','sex','agency'
    ,'typeofreseaach','rdprio']; 
}
