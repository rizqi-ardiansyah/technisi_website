<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\TrimStrings as Middleware;

class TrimStrings extends Middleware
{
    /**
     * The names of the attributes that should not be trimmed.
     *
<<<<<<< HEAD
     * @var array
=======
     * @var array<int, string>
>>>>>>> 3abbe9a20101da6a35b2b6d345e4d6901f9c30cf
     */
    protected $except = [
        'current_password',
        'password',
        'password_confirmation',
    ];
}
