<?php

namespace App\Imports;

use App\Models\Student;
use Maatwebsite\Excel\Concerns\ToModel;

class StudentsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Student([
            'fullname' => $row[0],
            'reg_no' => $row[1],
            'student_class' => $row[2],
            'academic_session' => $row[3],
            'term' => $row[4],
            'tt_subject_score' => $row[5],
            'average_score' => $row[6],
            'position' => $row[7],
            'comment' => $row[8],
        ]);
    }
}
