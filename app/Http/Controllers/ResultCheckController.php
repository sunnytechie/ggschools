<?php

namespace App\Http\Controllers;

use App\Models\Result;
use App\Models\Student;
use Illuminate\Http\Request;

class ResultCheckController extends Controller
{
    public function checkResult(Request $request) {
        //dd($request->all());
        $results = Result::where('student_class', $request->student_class)
                        ->where('reg_no', $request->reg_no)
                        ->where('academic_session', $request->session)
                        ->where('term', $request->term)->get();

                        //dd($results);

        $detail = Student::where('student_class', $request->student_class)
                        ->where('reg_no', $request->reg_no)
                        ->where('academic_session', $request->session)
                        ->where('term', $request->term)->first();

                        //dd($detail);

        return view('print', compact('results', 'detail'));
    }
}
