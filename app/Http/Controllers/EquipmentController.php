<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\equip;


class EquipmentController extends Controller
{
    public function display()
    {
        
        $equipment = equip::get();
        
        return view('equipment',compact('equipment'));
    } 


    public function store(Request $request)
    {
        $this->validate($request, [
        
        'name'=> 'required',
        'number'=> 'required',
        'justification'=> 'required',
    
     
       ]);

    
      
    
    $equipment = new equip();
    $equipment->name = $request->input('name');
    $equipment->number = $request->input('number');
    $equipment->justification = $request->input('justification');
    $equipment->save();
    
    return redirect('equipment')->with('success','Student Data Saved');

    }
}
