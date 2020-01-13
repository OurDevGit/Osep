<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\workplan;

class WorkPlanController extends Controller
{
    public function display()
    {
        
        $workplan = workplan::get();
        
        return view('workplan',compact('workplan'));
    } 


    public function store(Request $request)
    {
        $this->validate($request, [
        
        // 'objectives'=> 'required',
        // 'activities'=> 'required',
        // 'accomplishement'=> 'required',
    
     
       ]);
      
    
    $workplan = new workplan();
    $workplan->objectives = $request->input('objectives');
    $workplan->activities = $request->input('activities');
    $workplan->accomplishement = $request->input('accomplishement');
    $workplan->save();
    
    return redirect('workplan')->with('success','Student Data Saved');

    }
}
