<?php

namespace PHPComponentes;
use PHPComponentes\Authenticator as Auth;

class AccessHandler
{
    public function check($role)
    {
        return Auth::check() && Auth::user()->role === $role;
    }
}