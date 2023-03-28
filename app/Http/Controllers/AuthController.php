<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use Storage;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $user = User::where('email', $request->email)->orWhere('email', $request->email)->first();
        if (!$user)
            return redirect()->back()->withInput($request->all())->with('error', 'Your email is incorrect');


        if ($request->email == $user->email)
            $credentials = [
                'email' => $user->email,
                'password' => $request['password'],
            ];

        if (!Auth::attempt($credentials)) {

            return redirect()->back()->withInput($request->validated())->with('error', 'Your password is incorrect');
        }

      
        return redirect()->route('dashboard.index');     
        
    }

    public function register(Request $request)
    {
        
        return view('auth.Register');

    }

    public function userRegister(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email|unique:users,email',
            'name' => 'required|min:2|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|max:255|confirmed',
        ]);

        $data['password'] = Hash::make($request->password);
        $user = User::create($data);

        return $this->login($request);
    }

    public function logout()
    {

        Auth::logout();

        return redirect('login');
    }

}
