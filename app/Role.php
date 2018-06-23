<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Role
 *
 * @mixin \Eloquent
 */
class Role extends Model
{
    const SUPER = 0;
    const ADMIN = 1;
    const TEACHER = 2;
    const STUDENT = 3;
    const PARENT = 4;
    const DIRECTOR = 5;
    const SECRETARY = 6;
    const EMPLOYEE = 7;
}
