<?php

namespace App\Http\controllers;
class RegisterUserController {

    public function register(): void
    {
        view('users.register');
    }

}
