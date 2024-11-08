<?php

namespace App\Http\Controllers;

use App\Models\Folder;
use App\Models\Offers;
use App\Models\Ressource;
use Illuminate\Http\Request;

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
    public function specifics(string $id)
    {
        $offer = Offers::find($id);


        return view('pages.specifics', [
            'offer' => $offer
        ]);
    }
    public function home()
    {
        return view('pages.home');
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
        $folders = Folder::all();

        return view('admins.admin', [
            'folders' => $folders

        ]);
    }
    public function perso()
    {
        return view('perso.perso');
    }
    public function index()
    {
        return view('ressource.create');
    }
    public function indexOffers()
    {
        return view('offers.create');
    }
    public function list()
    {
        // Récupérer toutes les ressources
        $ressources = Ressource::all();

        // Passer les ressources à la vue
        return view('ressource.list', compact('ressources'));
    }
    public function listOffers()
    {
        // Récupérer toutes les ressources
        $offers = Offers::all();

        // Passer les ressources à la vue
        return view('offers.list', compact('offers'));
    }
    public function create()
    {
        return view('ressource.create');
    }
    public function createOffers()
    {
        return view('offers.create');
    }
    public function profil()
    {
        return view('pages.profil');
    }

    public function show(Request $request)
    {
        $folder = Folder::findOrFail($request->id);

        return view('admins.show', compact('folder'));
    }

    public function logout()
    {
        return redirect('/');
    }
}
