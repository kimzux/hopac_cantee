<?php

namespace App\Http\Controllers;
use App\Student;
use App\Parents;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class ParentController extends Controller
{
    
   public function index()
      {
      $parent = Parents::with('student');
      return view('parent.index',compact('parent'));
      } 

       public function show()
      {
      $student = Student::select('id', 'parent_name')->get();
      return view('parent.add',compact('student'));
      } 
      public function store(Request $request)
      {
    
        $parent = new Parents();
        $parent->student_id = request('parent_name');
        $parent->total_amount = request('total_amount');
        $parent->save();
        Alert::success('Success!', 'Successfully added');
        return back();
    }
}
