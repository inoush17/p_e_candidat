<?php

namespace App\Http\Controllers;

use App\Models\Folder;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $folders = Folder::all();
    

        return view('admins.admin', [
            'folders' => $folders
            
    ]);
    }
}
