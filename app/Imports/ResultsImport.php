<?php

namespace App\Imports;

use App\Models\Result;
use Maatwebsite\Excel\Concerns\ToModel;

class ResultsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Result([
            'subject' => $row[0],
            'reg_no' => $row[1],
            'student_class' => $row[2],
            'academic_session' => $row[3],
            'term' => $row[4],
            '1_set_weekly_ex' => $row[5],
            'take_home_ass' => $row[6],
            '1_class_test' => $row[7],
            '2_take_home_ass' => $row[8],
            '2_set_weekly_ex' => $row[9],
            '2_class_test' => $row[10],
            'project' => $row[11],
            '3_set_weekly_ex' => $row[12],
            'exam_score' => $row[13],
            'tt_score' => $row[14],
            'position' => $row[15],
            'class_avrg' => $row[16],
            'grade' => $row[17],
            'remark' => $row[18],
        ]);
    }
}
