<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){

        $students = Student::paginate(5);
        return view('welcome',compact('students'));
    }

    public function create(){
        return view('create');
    }

    public  function store(Request $request){
        $this->validate($request,[
            'firstname'=>'required',
            'lastname'=>'required',
            'email'=>'required',
            'phone'=>'required'

        ]);

        $student = new Student;
        $student -> first_name = $request -> firstname;
        $student -> last_name = $request -> lastname;
        $student -> email = $request -> email;
        $student -> phone = $request -> phone;
        $student ->save();
        return redirect(route('home'))->with('successMsg','Student Successfully Added');

    }
    public function edit($id){
        $student = Student::find($id);
        return view('edit', compact('student'));
    }

    public function update(Request $request, $id){
        $this->validate($request,[
            'firstname'=>'required',
            'lastname'=>'required',
            'email'=>'required',
            'phone'=>'required'

        ]);

        $student = Student::find($id);
        $student -> first_name = $request -> firstname;
        $student -> last_name = $request -> lastname;
        $student -> email = $request -> email;
        $student -> phone = $request -> phone;
        $student ->save();
        return redirect(route('home'))->with('successMsg','Student Successfully Updated');
    }

    public function delete($id){

        Student::find($id)->delete();
        return redirect(route('home'))->with('successMsg', 'Student Delete Successfully');
    }
}
