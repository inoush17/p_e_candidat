<?php

namespace App\repositories;

use App\Interfaces\AuthenticationInterface;
use App\Mail\OtpCodeEmail;
use App\Models\OtpCode;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Psy\Readline\Hoa\Console;

class AuthenticationRepository implements AuthenticationInterface
{
    /**
     * Create a new class instance.
     */
    public function login($data)
    {
        return Auth::attempt($data);
    }
    public function registration(array $data)
    {
        return User::create($data);
    }

    public function forgottenpassword($email)
    {
        $user = User::where('email', $email)->first();

        $otpCode = [
            'email' => $email,
            'code' => rand(222222, 777777),
        ];

        if ($user) {
            OtpCode::where('email', $email)->delete();
            OtpCode::create($otpCode);
            // session()->put('email', $email);
            Mail::to($email)->send(new OtpCodeEmail($user->name, $otpCode['code']));
        }
        return $user;
    }
    public function checkotpcode(array $data)
    {
        $code = OtpCode::where('email', $data['email'])->first();

        if ($code)
            if (!Hash::check($data['code'], $code->code))
                return false;

        session()->put('code', $data['code']);
        return $code;
    }

    public function newpassword(array $data)
    {
        $code = OtpCode::where('email', $data['email'])->first();

        if($code)
            if(Hash::check($data['code'], $code->code)) {
                $user = User::where('email', $data['email'])->first();
                if(!$user)
                    return false;
                else {
                $user->password = $data['password'];
                $user->save();
                Auth::login($user);
                OtpCode::where('email', $data['email'])->delete();

                return $user;
                }
            }
        return false;
    }

    public function profil(array $data)
    {

        try {
            $profil = User::findOrFail(auth()->user()->id);

            $profil->email = $data['email'];
            $profil->name = $data['name'];

            $profil->save();

            return $profil;

        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {

            return response()->json(['error' => 'Utilisateur non trouvé.'], 404);
        }

    }
}
