<?php

namespace App\Http\Controllers;


class ViewController extends Controller
{
    public function login()
    {
        return view('pages.login');
    }
    public function registration()
    {
        return view('pages.registration');
    }
    public function forgottenpassword()
    {
        return view('pages.forgottenpassword');
    }
    public function newpassword()
    {
        return view('pages.newpassword');
    }

    public function checkotpcode()
    {
        return view('pages.otpcode');
    }
    public function specifics()
    {
        return view('pages.specifics');
    }
    public function home()
    {
        return view('pages.home');
    }
    public function ouroffers()
    {
        return view('pages.ouroffers');
    }
    public function form1()
    {
        return view('pages.form1');
    }
    public function form2()
    {
        return view('pages.form2');
    }
    public function admin()
    {
        return view('admins.admin');
    }
    public function logout()
    {
        return redirect('/');
    }
}
