<?php

namespace App\Http\Controllers;

use App\Traits\ApiRespones;

class AuthController extends Controller
{
    use ApiRespones;

    public function login()
    {
        return $this->ok('Hello, login');

    }
}
