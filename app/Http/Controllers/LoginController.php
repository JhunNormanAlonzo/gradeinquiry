<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    function index(): View
    {
        return view('login');
    }

    function login(Request $request)
    {

        $login = Auth::attempt($request->only('email', 'password'));

        if ($login) {

            return Redirect::intended(route('school-year.index'));
        } else {

            return back()->with('error', 'Login failed, please check email or password');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
