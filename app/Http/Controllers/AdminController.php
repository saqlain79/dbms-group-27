<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function login()
    {
        return view ('login');
    }
    public function dashboard()
    {
        return view ('dashboard');
    }
    public function dataentry()
    {
        return view ('dataentry');
    }
    public function student_report()
    {
        return view ('studentreport');
    }
    public function course_report()
    {
        return view ('coursereport');
    }
    public function homepage()
    {
        return view ('homepage');
    }
    
}
