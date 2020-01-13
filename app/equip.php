<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class equip extends Model
{
    public $timestamps = false;
    protected $table ='equipment';
    

    protected $fillable = [
        'name', 'number ','justification'
];
}
