<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    const SEASONS = [
        1 => ['id' => 1, 'graduation_month' => 'April 2018', 'size' => 6, 'technologies' => 'HTML, CSS, JavaScript+jQuery, PHP, MySQL, Laravel (MVC Framework), RESTful API Integration, Version Control (Git)']
    ];

    public function getSeasonCohortAttribute($value)
    {
        return self::SEASONS[$value];
    }

    public function answers()
    {
        return $this->hasMany('App\StudentAnswer');
    }
}
