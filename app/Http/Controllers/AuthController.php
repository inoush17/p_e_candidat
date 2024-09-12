<?php

namespace App\Http\Controllers;

use App\Http\Requests\Authentication\Apply1Request;
use App\Http\Requests\Authentication\Apply2Request;
use App\Http\Requests\Authentication\ForgottenPasswordRequest;
use App\Http\Requests\Authentication\LoginRequest;
use App\Http\Requests\Authentication\NewPasswordRequest;
use App\Http\Requests\Authentication\OtpCodeRequest;
use App\Http\Requests\Authentication\RegistrationRequest;
use App\Interfaces\AuthenticationInterface;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    private AuthenticationInterface $authInterface;
    public function __construct(AuthenticationInterface $authInterface)
    {
        $this->authInterface = $authInterface;
    }

    public function login(LoginRequest $request)
    {
        $data = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        try {
            if($this->authInterface->login($data))
            return redirect()->route('pages.home');
        else
            return back()->with('error', 'Email ou mot de passe incorrect(s).');

        } catch (\Exception $ex) {
            return back()->with('error', 'Une erreur est survenue lors du traitement, Réessayez !');
        }
    }

    public function registration(RegistrationRequest $request)
    {
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'passwordconfirm' => $request->password,
            'isAdmin' => 0,

        ];

        try {
            $user = $this->authInterface->registration($data);

            Auth::login($user);

            return redirect()->route('admins.admin');

        } catch (\Exception $ex) {
            return back()->with('error', 'Une erreur est survenue lors du traitement, Réessayez !');
        }
    }

    public function forgottenpassword(ForgottenPasswordRequest $request)
    {
        $data = [
            'email' => $request->email,
        ];

        if ($this->authInterface->forgottenpassword($data['email']))
            return redirect()->route('otpcode');
        else
            return back()->with('error', 'Email non toruvé.');
    }

    public function checkotpcode(OtpCodeRequest $request)
    {
        $data = [
            'email' => $request->email,
            'code' => $request->code,
        ];

        try {

            $code = $this->authInterface->checkotpcode($data);

            if (!$code)
            return back()->with('error', 'Code de confirmation invalide.');
        else
            return redirect()->route('newpassword');

        } catch (\Exception $ex) {
            return back()->with('error', 'Une erreur est survenue lors du traitement, Réessayez !');
        }
    }

    public function newpassword(NewPasswordRequest $request)
    {
        $data = [
            'email' => $request->email,
            'password' => $request->password,
            'passwordConfirm' => $request->passwordConfirm,
            'code' => $request->code,
        ];

        try {

            $user = $this->authInterface->newPassword($data);

            if (!$user)
            return back()->with('error', 'Impossible de faire la mise à jour, reprendre.');
        else
            return redirect()->route('dashboard');

        } catch (\Exception $ex) {
            return back()->with('error', 'Une erreur est survenue lors du traitement, Réessayez !');
        }
    }

    public function apply1(Apply1Request $request)
    {
        
    }
    public function apply2(Apply2Request $request)
    {
        
    }
}
