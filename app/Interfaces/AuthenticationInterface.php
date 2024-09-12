<?php

namespace App\Interfaces;

interface AuthenticationInterface
{
    public function login(array $data);
    public function registration(array $data);
    public function forgottenpassword(array $data);
    public function checkotpcode(array $data);
    public function newpassword(array $data);
    public function apply1(array $data);
    public function apply2(array $data);
}
