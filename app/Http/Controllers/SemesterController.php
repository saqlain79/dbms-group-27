<?php

namespace App\Http\Controllers;

use App\Models\Semester;
use Illuminate\Http\Request;

class SemesterController extends Controller
{
    public function show_semester()
    {
        $semester=Semester::all();
        return view ('showsemester', ['semesters'=>$semester]);
    }
    public function add_semester()
    {
        return view ('addsemester');
    }
    public function store_semester(Request $request)
    {
        $semester=new Semester;
        $semester->semester_name=$request->semester_name;
        $semester->year=$request->year;
        $semester->semester_type=$request->semester_type;

        $semester->save();
        return redirect()->back();

    }
    public function edit_semester($id)
    {
        $semester=Semester::where('id',$id)->first();
        return view ('editsemester', compact('semester'));
    }
    public function update_semester(Request $request, $id)
    {
        $semester=Semester::where('id',$id)->first();
        $semester->semester_name=$request->semester_name;
        $semester->year=$request->year;
        $semester->semester_type=$request->semester_type;

        $semester->save();
        return redirect('/show_semester');
    }
    public function delete_semester($id)
    {
        $semester=Semester::where('id',$id)->delete();
        return redirect('/show_semester');
    }
}
