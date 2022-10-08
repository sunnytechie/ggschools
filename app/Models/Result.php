<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    use HasFactory;

    protected $fillable = [
        'subject',
        'reg_no',
        'student_class',
        'academic_session',
        'term',
        '1_set_weekly_ex',
        'take_home_ass',
        '1_class_test',
        '2_take_home_ass',
        '2_set_weekly_ex',
        '2_class_test',
        'project',
        '3_set_weekly_ex',
        'exam_score',
        'tt_score',
        'position',
        'class_avrg',
        'grade',
        'remark',
    ];
    
}
