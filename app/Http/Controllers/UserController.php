<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{
    public function index(): \Illuminate\View\View
    {
        return view('signup');
    }
    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
        ]);

        $user = new User();
        $user->name = $request->nom . ' ' . $request->prenom;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

return redirect('/')->with('success', 'inscription réussie !');
    }
}
