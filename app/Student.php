<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Student
 *
 * @mixin \Eloquent
 */
class Student extends Model
{
    public function Courses () {
        return $this->belongsToMany(Course::class);
    }
}
