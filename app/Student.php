<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    const SEASONS = [
        1 => ['id' => 1, 'graduation_month' => 'Season One', 'size' => 6, 'technologies' => 'HTML, CSS, JavaScript+jQuery, PHP, MySQL, Laravel (MVC Framework), RESTful API Integration, Version Control (Git)']
    ];

    const SPECIALIZATIONS = [
        1 => ['id' => 1, 'title' => 'Full Stack Developer'],
        2 => ['id' => 2, 'title' => 'UX Designer']
    ];

    public function getSeasonCohortAttribute($value)
    {
        return self::SEASONS[$value];
    }

    public function getSpecializationAttribute($value)
    {
        return self::SPECIALIZATIONS[$value];
    }

    public function getPhoneAttribute($value)
    {
        $first3 = substr($value, 0, 3);
        $second3 = substr($value, 3, 3);
        $last3 = substr($value, 6, 3);
        return "$first3-$second3-$last3";
    }

    public function studentAnswers()
    {
        return $this->hasMany('App\StudentAnswer');
    }
}
