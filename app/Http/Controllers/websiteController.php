<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employees;
use Illuminate\Support\Facades\DB;

class websiteController extends Controller
{
    public function create(){
        
        return view('create');

    }
    public function store(Request $r){
        $name = $r->name;
        $dateOfJoining = $r->dateOfJoining;
        $department = $r->department;
        $skills = json_encode($r->skills);

        $obj= new Employees();
        $obj-> name= $name;
        $obj-> joinDate= $dateOfJoining;
        $obj-> department= $department;
        $obj-> skills= $skills;

        if($obj->save()){
            return redirect('all-employees');
            }

        }
    public function read(){
        $employees= Employees::all();
        return view('read',compact('employees'));
       }
    public function edit($id){
        $employees= Employees::find($id);
        return view('edit',['employees' => $employees]);
    }
    public function update(Request $r, $id){

        $name = $r->name;
        $dateOfJoining = $r->dateOfJoining;
        $department = $r->department;
        $skills = json_encode($r->skills);

        $obj= Employees::find($id);
        $obj-> name= $name;
        $obj-> joinDate= $dateOfJoining;
        $obj-> department= $department;
        $obj-> skills= $skills;

        if($obj->save()){
            return redirect('all-employees');
            }
        
    }
    public function delete($id){
        $obj= Employees::find($id);

        if($obj->delete()){
            return redirect('all-employees');
            }

    }
    public function std(){

        return view('std');
    }
    public function str(){
        
    }
}