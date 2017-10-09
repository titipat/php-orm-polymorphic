<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function projects()
    {
        return $this->morphToMany('App\Project', 'relatable');
    }
}
