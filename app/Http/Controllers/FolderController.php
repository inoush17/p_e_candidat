<?php

namespace App\Http\Controllers;

use App\Http\Requests\Authentication\Form2Request;
use App\Http\Requests\Ressource\RessourceRequest;
use App\Interfaces\FolderInterface;
use App\Mail\FolderStatutsEmail;
use App\Models\Folder;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class FolderController extends Controller
{
    private FolderInterface $folderInterface;
    public function __construct(FolderInterface $folderInterface)
    {
        $this->folderInterface = $folderInterface;
    }

    public function form1(FormRequest $request)
    {

        $request->validate([
            'birth_certificate' => 'required|file|mimes:pdf,jpeg,png|max:2048',
            'identity_card'     => 'required|file|mimes:pdf,jpeg,png|max:2048',
            'latest_bulletin'   => 'required|file|mimes:pdf,jpeg,png|max:2048',
            'cover_letter'      => 'required|file|mimes:pdf,jpeg,png|max:2048',
            'file_annex'        => 'nullable|file|mimes:pdf,jpeg,png|max:2048',
        ]);

        $fileBirthCertificate = $request->file('birth_certificate');
        $fileIdentityCard = $request->file('identity_card');
        $fileLatestBulletin = $request->file('latest_bulletin');
        $fileCoverLetter = $request->file('cover_letter');


        $fileBirthCertificateName = $fileBirthCertificate->getClientOriginalName();
        $fileIdentityCardName = $fileIdentityCard->getClientOriginalName();
        $fileLatestBulletinName = $fileLatestBulletin->getClientOriginalName();
        $fileCoverLetterName = $fileCoverLetter->getClientOriginalName();

        $data = [
            'last_name' => $request->last_name,
            'first_name' => $request->first_name,
            'email' => $request->email,
            'date_of_birth' => $request->date_of_birth,
            'phone_number' => $request->phone_number,
            'nationality' => $request->nationality,
            'neighborhood' =>$request->neighborhood,
            'sex' => $request->sex,
            'marital_status' => $request->marital_status,

            'birth_certificate' => $fileBirthCertificateName,
            'identity_card' => $fileIdentityCardName,
            'latest_bulletin' => $fileLatestBulletinName,
            'cover_letter' => $fileCoverLetterName,
            // 'file_annex' => $request->file('file_annex') 
            // ? $request->file('file_annex')->store('folders', 'public') 
            // : null;
        
        ];
        
        try {
            DB::beginTransaction();

            $this->folderInterface->form1($data);
            DB::commit();

            return redirect()->route('admins.admin');
        } catch (\Throwable $th) {
            return $th;
        }
    }

    public function form2(Form2Request $request) {}

    public function index()
    {
        return view('ressource.create');
    }
    public function indexOffers()
    {
        return view(view: 'offers.create');
    }
    public function create(Request $request)
    {

        $request->validate([
            'file' => 'required|file|mimes:jpg,png,pdf,docx|max:2048',
        ]);
        // Stocker le fichier
        $file = $request->file('file');

        $fileName = $file->getClientOriginalName(); // Obtenir le nom du fichier
        $path = $file->storeAs('uploaded_files', $fileName, 'public');

        $data = [
            'name' => $request->name,
            'path' => $fileName,
            // $path = $request->file('file')->create('ressources', 'public');
        ];

        try {
            DB::beginTransaction();

            $this->folderInterface->create($data);
            DB::commit();

            return redirect()->route('ressource.list');
        } catch (\Throwable $th) {
            return $th;
        }
    }
    public function createOffers(Request $request)
    {

        $data = [
            'name' => $request->name,
        ];

        try {
            DB::beginTransaction();

            $this->folderInterface->createOffers($data);
            DB::commit();

            return redirect()->route('offers.list');
        } catch (\Throwable $th) {
            return $th;
        }
    }


    public function valid($id)
    {
        $result = $this->folderInterface->valid('1');
    }


    public function accept($id)
    {
        $folder = Folder::findOrFail($id);
        $folder->statuts = 'accepted';
        $folder->save();
        
        $statusMessage = 'accepté';
        Mail::to($folder->email)->send(new FolderStatutsEmail($folder, $statusMessage));
    
        return redirect()->back()->with('success', 'Formulaire accepté avec succès ! Un email a été envoyé.');
    
    }

    
    public function reject($id)
    {
        $folder = Folder::findOrFail($id);
        $folder->statuts = 'rejected';
        $folder->save();
    
        $statusMessage = 'rejeté';
        Mail::to($folder->email)->send(new FolderStatutsEmail($folder, $statusMessage));
    
        return redirect()->back()->with('error', 'Formulaire rejeté. Un email a été envoyé.');
    }
}
