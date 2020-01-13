<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\form;
use App\agency;

class FormController extends Controller
{
    // public function display1()
    // {
    //     $agencies2 = agency::get();
        
    //     return view('form2',compact('agencies2'));
    // } 

    public function display()
    {
        // $agencies2 = agency::get();
        $form2a = form::get();
        
        return view('form2',compact('form2a'));
    } 


    public function store(Request $request)
    {
        $this->validate($request, [
        
        'projecttitle'=> 'required',
        'projectleader'=> 'required',
        'mobilenumber'=> 'required',
        'email'=> 'required',
        'officeadd'=> 'required',
        'agecnyaffilated'=> 'required',
        'projectduration'=> 'required',
        'objective'=> 'required',
        'rationale'=> 'required',
        'literature'=> 'required',
        'methodology'=> 'required',
        'accomplishement'=> 'required',
        'gad'=> 'required',
        'limitation'=> 'required',
        'litcited'=> 'required',
        'priorityarea'=>'required'

        
        
        // 'sex'=> 'required',
        // 'implementing'=> 'required',
        
        
      
       ]);

    
 
      
    
    $form2a = new form();
    $form2a->projecttitle = $request->input('projecttitle');
    $form2a->projectleader = $request->input('projectleader');
    $form2a->mobilenumber = $request->input('mobilenumber');
    $form2a->email = $request->input('email');
    $form2a->officeadd = $request->input('officeadd');
    $form2a->agecnyaffilated = $request->input('agecnyaffilated');
    $form2a->projectduration = $request->input('projectduration');
    $form2a->sex = $request->input('sex');
    $form2a->objective = $request->input('objective');
    $form2a->rationale = $request->input('rationale');
    $form2a->literature = $request->input('literature');
    $form2a->methodology = $request->input('methodology');
    $form2a->accomplishement = $request->input('accomplishement');
    $form2a->gad = $request->input('gad');
    $form2a->limitation = $request->input('limitation');
    $form2a->litcited = $request->input('litcited');
    $form2a->priorityarea = $request->input('priorityarea');

    
    // $form2a->implementing = $request->input('implementing');

    $form2a->save();
    

    return redirect('equipment')->with('success','Student Data Saved');

    }
}
