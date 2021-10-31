<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Professor;

class ProfessorController extends Controller
{
    
    public function index()
    {
        $professor = Professor::all();
        return view('professor.index',compact('professor'));
    }

    public function create()
    {
        return view('professor.create');
    }
  
    public function store(Request $request)
    {
        $request->validate([
            'professor_id'=>'required',
            'lastname'=>'required',
            'firstname'=>'required',
            'middlename'=>'required',
            'gender'=>'required',
            'homeAddress'=>'required',
            'contactNo'=>'required',
            'department'=>'required',
            
        ]);

        $professor = new Professor([
            'professor_id'=>$request->get('professor_id'),
            'lastname'=>$request->get('lastname'),
            'firstname'=>$request->get('firstname'),
            'middlename'=>$request->get('middlename'),
            'gender'=>$request->get('gender'),
            'homeAddress'=>$request->get('homeAddress'),
            'contactNo'=>$request->get('contactNo'),
            'department'=>$request->get('department'),
        ]);

        $professor->save();
        return redirect('/professor')->with('success', 'New Professor Added Successfully!'); 
    }


    public function show($id)
    {
        
    }

   
    public function edit($id)
    {
        $professor = Professor::find($id);
        return view('professor.edit', compact('professor'));       
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
            'department'=>'required',
        ]);

            $professor = Professor::find($id);       
            $professor->lastname = $request->get('lastname');
            $professor->firstname = $request->get('firstname');
            $professor->middlename = $request->get('middlename');
            $professor->gender = $request->get('gender');
            $professor->homeAddress = $request->get('homeAddress');
            $professor->contactNo = $request->get('contactNo');
            $professor->department = $request->get('department');
            $professor->save();

            return redirect('/professor')->with('success', 'New Professor Information Updated!');     
    }


    public function destroy($id)
    {
        $professor = Professor::find($id);
        $professor->delete();

        return redirect('/professor')->with('success', 'Professor Information Deleted!');           
    }
}
