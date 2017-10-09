<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function students()
    {
        return $this->morphedByMany('App\Student', 'relatable');
    }

    public function advisors()
    {
        return $this->morphedByMany('App\Lecturer', 'relatable');
    }
}