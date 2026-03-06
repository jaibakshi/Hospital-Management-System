<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function register(Request $request)
    {

        User::create([
            'email' => $request->email,
            'name' => $request->name,
            'phone' => $request->phone,
            'dob' => $request->dob,
            'gender' => $request->gender,
            'password' => Hash::make($request->password),
            'logintype' => 'user',
        ]);
        return redirect('/login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);


        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            
            if (Auth::user()->logintype == 'admin'){
                return redirect('/adminhome');
            }
                elseif (Auth::user()->logintype == 'doctor'){
                    return redirect('/doctorhome');
                }
            else{
                return redirect('/home');
            }
        }

        return back()
                    ->with('error', 'Invalid email or password')
                    ->withInput();
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }

    public function patients()
    {
        $patients = User::  withCount('appointments')
                ->get();

        return view('admin.patients', compact('patients'));
    }
}
