<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentAnswer extends Model
{
    public function question()
    {
        return $this->hasOne('App\Question', 'id', 'question_id');
    }

    public function student()
    {
        return $this->hasOne('App\Student', 'id', 'student_id');
    }
}
