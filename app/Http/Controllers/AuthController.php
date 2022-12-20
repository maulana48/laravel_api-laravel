<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{ User };
use Illuminate\Support\Facades\{ Hash, Auth };

class AuthController extends Controller
{
    public function login(Request $request){
        if($request->method() == 'GET'){
            return view('layouts.login', [
                'title' => 'login',
                'icon' => 'asd'
            ]);
        }

        $rules = [
            'email' => 'required',
            'password' => 'required'
        ];
        $payload = $request->validate($rules);
        
        $user = User::query()->where('email', $payload['email'])->first();
        if(!$user){
            return back()->with('loginError', 'Email atau Password salah');
        }

        if(!Hash::check($payload['password'], $user->password)){
            return back()->with('loginError', 'Email atau Password salah');
        }

        if(Auth::attempt($payload)){

            $request->session()->regenerate();
            return redirect()->intended();

        }
    }

    Public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/login');
    }

    public function registration(Request $request){
        if($request->method() == 'GET'){
            return back();
            // return view('layouts.registration', [
            //     'title' => 'registration',
            //     'icon' => 'asd'
            // ]);
        }

        $rules = [
            'nama' => 'required',
            'email' => 'required|email',
            'jenis_kelamin' => 'required|max:1',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
            'password' => 'required',
        ];
        $payload = $request->validate($rules);
        $payload['password'] = Hash::make($payload['password']);
        $payload['role'] = 2;
        
        // dd($payload);
        $user = User::create($payload);

        if(! $user && $donor){
            return back()->with('regError', 'Pendaftaran gagal, coba ulangi');
        }

        return back()->with('success', 'Pendataran berhasil');
    }
}
