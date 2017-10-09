<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lecturer extends Model
{
    public function projectAdvisors()
    {
        return $this->morphToMany('App\Project', 'relatable');
    }
}