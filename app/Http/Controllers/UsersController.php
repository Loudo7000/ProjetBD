<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usagers = User::where('droit', 'admin')->get();
        return View('users.index', compact('usagers'));
    }

    public function showloginform()
    {
        return View('users.showloginform');
    }

    public function login(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        if(isset($user)){
            Session::put('user', $user);
            Session::put('nom', $user->nom);
            Session::put('id', $user->id);
        }




        $reussi = Auth::attempt(['email' => $request->email, 'password' => $request->password]);
            if($reussi){
                return redirect()->route('produits.index')->with('message', "Connexion réussie");
            }
            else{
                return redirect()->route('login')->withErrors(['Informations invalides']); 
            }
        
    }

    public function logout(Request $request)
    {
        Auth::logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $usager = new User($request->all());
            $usager->password = Hash::make($request->password);
            $usager->droit = 'client';
            $usager->save();
        }
        catch (\Throwable $e) {
        //Gérer l'erreur
            Log::debug($e);
        }
        return redirect()->route('users.login');
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {        
        $usager = User::findOrFail($id);
        return View('users.edit', compact('usager'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $usager = User::findOrFail($id);

            $usager->nom = $request->nom;
            $usager->prenom = $request->prenom;
            $usager->adresse = $request->adresse;
            $usager->email = $request->email;
            $usager->password = $request->password;

            if(isset($request->avatar))
            {
            $image_path = public_path('img/usagers').'/'.$usager->avatar;
            
            if(File::exists($image_path)) {
                File::delete($image_path);
            }

            $uploadedFile = $request->file('avatar');
            $nomFichierUnique = str_replace(' ', '_', $usager->email) . '-' . uniqid() . '.' . $uploadedFile->extension(); 

            try {
            $request->avatar->move(public_path('img/usagers'), $nomFichierUnique);
            }
            catch(\Symfony\Component\HttpFoundation\File\Exception\FileException $e) {
                Log::debug($e);
                Log::error("Erreur lors du téléversement du fichier. ", [$e]);
            }

            $usager->avatar = $nomFichierUnique;
            }

            $usager->save();
            return redirect()->route('produits.index')->with('message', "Modification de " . $usager->nom . " " . $usager->nom . " réussi!");
        }
        catch (\Throwable $e) {
            Log::debug($e);
            return redirect()->route('produits.index')->withErrors(['la Modification n\'a pas fonctionné']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $usager = Usager::findOrFail($id);
            $image_path = public_path('img/usagers').'/'.$usager->avatar;
            
            if(File::exists($image_path)) {
                File::delete($image_path);
            }

            $usager->delete();
            return redirect()->route('users.index')->with('message', "Suppression de " . $usager->nom . " réussi!");
        }
        catch (\Throwable $e) {
            Log::debug($e);
            return redirect()->route('users.index')->withErrors(['la suppression n\'a pas fonctionné']);
        }
    }
}
