<?php

namespace App\Http\Controllers;
use App\Models\Result;
use App\Models\Student;
use PDF;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function pdf(Request $request)
    {
        $results = Result::where('student_class', $request->student_class)
                        ->where('reg_no', $request->reg_no)
                        ->where('academic_session', $request->session)
                        ->where('term', $request->term)->get();

                        //dd($results);

        $detail = Student::where('student_class', $request->student_class)
                        ->where('reg_no', $request->reg_no)
                        ->where('academic_session', $request->session)
                        ->where('term', $request->term)->first();

        $data = ['results' => $results, 'detail' => $detail];
        $pdf = PDF::loadView('result', $data);
  
        return $pdf->download('online-result.pdf');
    }
}
