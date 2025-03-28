<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{

    public function index()
    {
        return view('login');
    }

    public function create() {}

    public function store(Request $request)
    {
        $user = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if (Auth::attempt($user)) {
            return redirect()->route('admin');
        } else {
            return redirect()->route('log.index')->with('error_msg', 'Please Check Email And Password');
        }
    }

    public function regindex()
    {
        return view('ragistar');
    }

    public function regstore(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8',
            'role' => 'required',
        ]);

        $reg_data = new User;
        $reg_data->name = $request->name;
        $reg_data->email = $request->email;
        $reg_data->password = $request->password;
        $reg_data->role = $request->role;
        $reg_data->save();
        return redirect(route('log.index'));
    }

    public function admin()
    {
        if (Auth::check() &&  Auth::user()->role == 'admin') {
            return view('admin');
        } elseif (Auth::check() &&  Auth::user()->role == 'normal') {
            return redirect(route('home'));
        } else {
            return redirect(route('log.index'));
        }
    }
    public function  Logout()
    {
        Auth::logout();
        return redirect(route('log.index'));
    }

    public function post()
    {
        return view('admin_post');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
