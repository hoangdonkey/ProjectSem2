<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use APP\Models\Admin;
use Illuminate\Support\Facades\Auth;


class CustomAuthController extends Controller
{

    public function index()
    {
        return view('auth.login');
    }


    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                ->with('status', 'You have signed in!');
        }

        return back()->with('status', 'Login details are not valid');
    }



    public function registration()
    {
        return view('auth.register');
    }


    public function customRegistration(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'mobile' => 'required',
        ]);

        $data = $request->all();
        $check = $this->create($data);

        return redirect("dashboard")->with('status', 'You have signed in');
    }


    public function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'mobile' => $data['mobile'],
        ]);
    }


    public function dashboard()
    {
        if (Auth::check()) {
            $user = Auth::user();
            return view('dashboard', ['user' => $user]);
        }

        return redirect("login")->with('status', 'You are not allowed to access');
    }


    public function signOut()
    {
        Session::flush();
        Auth::logout();

        return Redirect('login');
    }

    public function adminIndex()
    {
        return view('admin.adminlogin');
    }

    public function adminLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->route('/home')->with('status', 'You have signed in!');
        }

        return back()->with('status', 'Login details are not valid');
    }
}
