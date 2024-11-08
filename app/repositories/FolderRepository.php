<?php

namespace App\repositories;

use App\Interfaces\FolderInterface;
use App\Mail\FolderStatutsEmail;
use App\Mail\SendFeedBackEmail;
use App\Models\Folder;
use App\Models\Offers;
use App\Models\Ressource;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class FolderRepository implements FolderInterface
{
    /**
     * Create a new class instance.
     */
    public function form1(array $data)
    {
        $student = Folder::create($data);

        $email = Auth::user()->email;

        Mail::to($email)->send(new SendFeedBackEmail($data['last_name']));

        return $student;
    }


    public function form2(array $data)
    {
        return Folder::create($data);
    }

    public function create(array $data)
    {
        return Ressource::create($data);

        // return back()->with('success', 'Ressource Ajoutez avec succès!');
    }
    public function createOffers(array $data)
    {
        return Offers::create($data);

        // return back()->with('success', 'Ressource Ajoutez avec succès!');
    }

    public function valid($id)
    {
        $fold = Folder::findOrFail($id);

        $fold->statuts = '1';

        $fold->save();
        return $fold;

    }
    public function reset(array $data)
    {

    }
    public function list(array $data)
    {

    }
}
