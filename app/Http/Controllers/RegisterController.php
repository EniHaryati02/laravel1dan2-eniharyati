<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Userr;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index() {

        return view ('register');
    }

    public function store(Request $request) {
        
        $userr= Userr::create([
            'email' => $request -> email,
            'password' => Hash::make($request->password),
            'role' => $request -> role,
            
        ]);
       
        return redirect ('/lending')->with('success', 'Akun Berhasil Dibuat');
    } 
}
