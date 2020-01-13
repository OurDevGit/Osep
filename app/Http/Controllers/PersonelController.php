<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\person;

class PersonelController extends Controller
{
    public function display()
    {
        
        $personnels = person::get();
        
        return view('personel',compact('personnels'));
    } 


    public function store(Request $request)
    {
        $this->validate($request, [
        
        // 'name'=> 'required',
        // 'number'=> 'required',
        // 'justification'=> 'required',
    
     
       ]);

    
      
    
    $personnels = new person();
    $personnels->first_name = $request->input('first_name');
    $personnels->middle_name = $request->input('middle_name');
    $personnels->last_name = $request->input('last_name');
    $personnels->suffix = $request->input('suffix');
    $personnels->email = $request->input('email');
    $personnels->mobile = $request->input('mobile');
    $personnels->expertise = $request->input('expertise');
    $personnels->affilation = $request->input('affilation');
    $personnels->role = $request->input('role');
    $personnels->percent = $request->input('percent');
    $personnels->responsibility = $request->input('responsibility');
    $personnels->fulltime = $request->input('fulltime');

    $personnels->save();
    
    return redirect('personel')->with('success','Student Data Saved');

    }

}
