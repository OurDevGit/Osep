<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class workplan extends Model
{
    public $timestamps = false;
    protected $table ='workplan';
    

    protected $fillable = [
        'objectives', 'activities ','accomplishement', 'y1q1'
];
}
