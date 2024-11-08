<?php

namespace App\Interfaces;

interface AuthenticationInterface
{
    public function login(array $data);
    public function registration(array $data);
    public function forgottenpassword(array $data);
    public function checkotpcode(array $data);
    public function newpassword(array $data);
    public function profil(array $data);
}
