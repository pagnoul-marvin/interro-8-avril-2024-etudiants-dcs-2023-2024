<?php

namespace App\Http\controllers;
class AuthenticatedSessionController
{
    public function login(): void
    {
        view('users.login');
    }

    public function getDataOfCurrentUser():void
    {
        $user_mail = <<<SQL
SELECT `email` FROM users LIMIT 1;
SQL;
        $user_password = <<<SQL
SELECT `password` FROM users LIMIT 1;
SQL;
        $hashed_user_password = password_hash($user_password, PASSWORD_DEFAULT);

        view('jiris.index', compact('user_mail', 'hashed_user_password'));
    }
}