<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class form extends Model
{
    public $timestamps = false;
    protected $table ='form2a';
    

    protected $fillable =[
        
        'projecttitle','projectleader','mobilenumber','email','officeadd','agencyadd'
        ,'agecnyaffilated','projectduration', 'implementing'

    
    ];
}
