<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function projectStudents()
    {
        return $this->hasMany('App\ProjectStudent');
    }
}
