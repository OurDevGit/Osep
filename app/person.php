<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class person extends Model
{
    public $timestamps = false;
    protected $table ='personnels';
    

    protected $fillable =[
        
        'first_name','middle_name','last_name','suffix'
        ,'email','mobile','expertise','affilation','role'
        ,'percent','responsibility','fulltime'
    
    ];
}
