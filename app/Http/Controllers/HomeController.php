<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $name = "Laravel bootcamp";

        // return view('welcome')->with('name',$name);
        return view('welcome',compact('name'));
    } 
    public function createStudent(){

        return view('createstudent');
    }
    public function storeStudent(Request $request){

        Student::create([
            'name' => $request->name,
            'student_id' => $request->student_id,
            'address' => $request->address,
            'date_of_birth' => $request->date_of_birth,
        ]);
        
        return redirect('/');
    }
}
