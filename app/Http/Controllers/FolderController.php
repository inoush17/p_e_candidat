<?php

namespace App\Http\Controllers;

use App\Http\Requests\Authentication\Form2Request;
use App\Interfaces\FolderInterface;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\DB;

class FolderController extends Controller
{
    private FolderInterface $folderInterface;
    public function __construct(FolderInterface $folderInterface)
    {
        $this->folderInterface = $folderInterface;
    }

    public function form1 (FormRequest $request)
    {
        $data = [
            'last_name' => $request->last_name,
            'first_name' => $request->first_name,
            'date_of_birth' => $request->date_of_birth,
            'phone_number' => $request->phone_number,
            'nationality' => $request->nationality,
            'sex' => $request->sex,
            'marital_status' => $request->marital_status,
        ];

        try {
            DB::beginTransaction();

            $this->folderInterface->form1($data);
            DB::commit();

            return redirect()->route('admins.admin');
        } catch(\Throwable $th) {
            return $th;
        }
    }
    
    public function form2(Form2Request $request)
    {
        
    }
}
