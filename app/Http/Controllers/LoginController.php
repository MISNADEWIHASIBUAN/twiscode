<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function auth(Request $request)
    {
        $data = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        $login = Auth::attempt($data);

        if ($login) {
            return redirect('admin')->with('success', 'Berhasil Login!');
        } else {
            throw ValidationException::withMessages([
                'email' => [trans('auth.failed')],
            ]);
            // return back()->with('error', 'Login Error! Recheck input!');
        }
        //throw $th;    

    }
}
