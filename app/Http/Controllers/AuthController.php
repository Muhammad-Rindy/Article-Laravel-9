<?php

namespace App\Http\Controllers;

use App\Models\Postingan;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Session;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        // echo "Ini List Project";
        // ambil data dari storage (buat dulu di txt)
        // $posts = Storage::get('posts.txt');
        // $posts = explode("\n", $posts);

        // $view = [
        //     // 'posts' => 'Ini adalah postingan',
        //     // 'coments' => ['satu', 'dua', 'tiga']
        //     'posts' => $posts
        // ];

        return view('auth.login');
    }
    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect('/posts');
        } else {
            return redirect('login')->with('error_message', 'Wrong email or password');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }

    public function register_form()
    {
        return view('auth.register');
    }
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed'
        ]);

        User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password'))
        ]);
        return redirect('login');
    }

}