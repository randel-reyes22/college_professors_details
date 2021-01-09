<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;



class StudentController extends Controller
{
    
    public function index()
    {
        $students = Student::all();
        return view('students.index',compact('students'));
    }

    public function create()
    {
        return view('students.create');
    }
  
    public function store(Request $request)
    {
        $request->validate([
            'studentNo'=>'required',
            'lastname'=>'required',
            'firstname'=>'required',
            'middlename'=>'required',
            'gender'=>'required',
            'homeAddress'=>'required',
            'contactNo'=>'required',
            'course'=>'required',
            'department'=>'required',
            'year'=>'required'
        ]);

        $student = new Student([
            'studentNo'=>$request->get('studentNo'),
            'lastname'=>$request->get('lastname'),
            'firstname'=>$request->get('firstname'),
            'middlename'=>$request->get('middlename'),
            'gender'=>$request->get('gender'),
            'homeAddress'=>$request->get('homeAddress'),
            'contactNo'=>$request->get('contactNo'),
            'course'=>$request->get('course'),
            'department'=>$request->get('department'),
            'year'=>$request->get('year')
        ]);

        $student->save();
        return redirect('/students')->with('success', 'New Student Added Successfully!'); 
    }


    public function show($id)
    {
        
    }

   
    public function edit($id)
    {
        $student = Student::find($id);
        return view('students.edit', compact('student'));       
    }

    
    public function update(Request $request, $id)
    {    
        $request->validate([   
            'lastname'=>'required',
            'firstname'=>'required',
            'middlename'=>'required',
            'gender'=>'required',
            'homeAddress'=>'required',
            'contactNo'=>'required',
            'course'=>'required',
            'department'=>'required',
            'year'=>'required'
        ]);

            $student = Student::find($id);       
            $student->lastname = $request->get('lastname');
            $student->firstname = $request->get('firstname');
            $student->middlename = $request->get('middlename');
            $student->gender = $request->get('gender');
            $student->homeAddress = $request->get('homeAddress');
            $student->contactNo = $request->get('contactNo');
            $student->course = $request->get('course');
            $student->department = $request->get('department');
            $student->year = $request->get('year');
            $student->save();

            return redirect('/students')->with('success', 'New Student Information Updated!');     
    }


    public function destroy($id)
    {
        $student = Student::find($id);
        $student->delete();

        return redirect('/students')->with('success', 'Student Information Deleted!');           
    }
}
