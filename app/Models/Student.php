<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'fullname',
        'reg_no',
        'student_class',
        'academic_session',
        'term',
        'tt_subject_score',
        'average_score',
        'position',
        'comment',
    ];
}
