<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Qbank;

class QbankController extends Controller
{
    public function show_qbank()
    {
        $qbank=Qbank::all();
        return view ('showquestionbank', ['qbanks'=>$qbank]);
    }
    public function create_qbank()
    {
        return view ('createquestionbank');
    }
    public function store_qbank(Request $request)
    {
        $qbank=new Qbank;
        $qbank->semester_id=$request->semester_id;
        $qbank->question_id=$request->question_id;

        $qbank->save();
        return redirect()->back();

    }
    public function add_question()
    {
        $qbank=Qbank::all();
        return view ('addquestion', compact('qbank'));
    }
}
