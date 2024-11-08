<?php

namespace App\Http\Controllers;

use App\Http\Requests\Authentication\ForgottenPasswordRequest;
use App\Http\Requests\Authentication\LoginRequest;
use App\Http\Requests\Authentication\NewPasswordRequest;
use App\Http\Requests\Authentication\OtpCodeRequest;
use App\Http\Requests\Authentication\ProfilRequest;
use App\Http\Requests\Authentication\RegistrationRequest;
use App\Interfaces\AuthenticationInterface;
use App\Models\User;
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
            if ($this->authInterface->login($data)) {

                $admin = User::where('email', $request->email)->first();

                
                if ($admin->isAdmin === 0) {
                    
                    return redirect()->route('admin');
                    
                } else {
                    return redirect()->route('home');
                }
            } else
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

        ];

        try {
            $user = $this->authInterface->registration($data);

            // Auth::login($user);

            return redirect()->route('login');
        } catch (\Exception $ex) {
            return back()->with('error', 'Une erreur est survenue lors du traitement, Réessayez !');
        }
    }

    public function forgottenpassword(ForgottenPasswordRequest $request)
    {
        $data = [
            'email' => $request->email,
        ];

        // session(["email" => $data['email']]);
        session()->put("email", $data["email"]);

        if ($this->authInterface->forgottenpassword($data['email']))
            return redirect()->route('otpcode')->with("email", $data['email']);
        else
            return back()->with('error', 'Email non toruvé.');
    }

    public function checkotpcode(OtpCodeRequest $otpCodeRequest)
    {
        // $email =  session(('email'));
        $email =  session()->get("email");
        $data = [
            'email' => $otpCodeRequest->email,
            'code' => $otpCodeRequest->code,
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

    public function newpassword(NewpasswordRequest $request)
    {
        $data = [
            'password' => $request->password,
            'passwordConfirm' => $request->passwordConfirm,
        ];

        try {

            $user = $this->authInterface->newpassword($data);

            if (!$user)
            return back()->with('error', 'Impossible de faire la mise à jour, reprendre.');
        else
            return redirect()->route('login');

        } catch (\Exception $ex) {
            return back()->with('error', 'Une erreur est survenue lors du traitement, Réessayez !');
        }
    }

    public function profil(ProfilRequest $request)
    {
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            // 'password' => $request->password,
            // 'newpassword' => $request->newpassword,

        ];

        try {
            $user = $this->authInterface->profil($data);

            if ($user) {
                return redirect()->route('admins.admin');
            }

        } catch (\Exception $ex) {
            return back()->with('error', 'Une erreur est survenue lors du traitement, Réessayez !');
        }
    }
}
