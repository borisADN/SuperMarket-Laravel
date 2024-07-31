<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::check()) {
            return redirect('home');
        }else {
            return view('home');
        }


      
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AuthRequest $request)
    {
       // Les données sont déjà validées grâce à AuthRequest

    // Création de l'utilisateur

    // return $request;

    $user = new User();
    $user->name = $request->name;
    $user->email = $request->email;
    $user->password = Hash::make($request->password);
    $user->save();
   

    
    return redirect()->back()->with('message', 'Compte cree avec succes,Vous pouvez maintenant vous connecter')->with('alert-type', 'success');
    }

    public function handle_login(Request $request) {
        // Récupération des informations de connexion
    $credentials = $request->only('email', 'password');

    // Tentative de connexion
    if (Auth::attempt($credentials)) {
        // Redirection vers la page d'accueil ou la page demandée précédemment
        return redirect()->intended('home')->with('message', 'Connexion réussie !')->with('alert-type', 'success');
    }

    // Gestion des erreurs de connexion
    // Si l'email ou le mot de passe est incorrect, nous allons vérifier l'existence de l'email
    $user =User::where('email', $request->email)->first();
    
    if (!$user) {
        return redirect()->back()->with('message', 'Adresse email non reconnue')->with('alert-type', 'error');
    }

    return redirect()->back()->with('message', 'Mot de passe incorrect')->with('alert-type', 'error');
     
    }
    
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateProfile(Request $request, string $id)
    {
      return $request;
        //afficher le profile
        // return $user;
        // return view('auth.edit', ['user' => $user]);



        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->back()->with('message', 'Compte modifié avec succes')->with('alert-type', 'success');

        
    }
    //edit profile
    public function editProfile() {
        $user = Auth::user();
        return view('edit_profile', ['user' => $user]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    //logout
    public function logout() {
        Auth::logout();
        // Redirection vers la page de connexion
    return redirect()->route('login')->with('message', 'Vous avez été déconnecté avec succès!')->with('alert-type','success');
    }
}
