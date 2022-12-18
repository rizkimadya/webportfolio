<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{

    public function halaman_user()
    {
        return view('dashboard.dashboard');
    }

    // register
    public function register()
    {
        $data['title'] = 'Register';
        return view('register', $data);
    }

    public function register_action(Request $request)
    {

        $request->validate([
            'username' => 'required',
            'password' => 'required',
            'agama' => 'required',
            'kewarganegaraan' => 'required',
        ]);

        $user = new User([
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'agama' => $request->agama,
            'kewarganegaraan' => $request->kewarganegaraan,
        ]);

        $user->save();
        return redirect('login');
    }

    // login
    public function login()
    {
        $data['title'] = 'Login';
        return view('login', $data);
    }

    public function login_action(Request $request){
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            return redirect()->route('dashboard');
            return view('dashboard.dashboard')->with('users', $request);
        }
        return back()->withErrors([
            'password' => 'Username atau Password anda salah',
        ]);
    }


    // logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
