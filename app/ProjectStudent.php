<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectStudent extends Model
{
    public $timestamps = false;

    public function project()
    {
        return $this->hasOne('App\Project', 'id', 'project_id');
    }

    public function student()
    {
        return $this->belongsTo('App\Student');
    }
}
