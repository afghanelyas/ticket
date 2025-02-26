<?php

namespace App\Http\Controllers;

use App\Http\Requests\ApiLoginRequest;
use App\Traits\ApiRespones;

class AuthController extends Controller
{
    use ApiRespones;

    public function login(ApiLoginRequest $request)
    {
        return $this->ok($request->get('email'));

    }

    public function register()
    {
        return $this->ok('register');
    }
}
