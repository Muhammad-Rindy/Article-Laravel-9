<?php

namespace App\Http\Controllers;

use App\Models\Postingan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!Auth::check()) {
            return redirect('login');
        } else {
            $posts = Postingan::where('active', true)->get();
            $view = [
                'posts' => $posts
            ];

            return view('posts.index', $view);
        }


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (!Auth::check()) {
            return redirect('login');
        } else {

            return view('posts.create');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (!Auth::check()) {
            return redirect('login');
        } else {


            $title = $request->input('title');
            $content = $request->input('content');

            Postingan::insert([
                'title' => $title,
                'content' => $content,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]);

            return redirect('posts');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        if (!Auth::check()) {
            return redirect('login');
        } else {


            $post = Postingan::where('id', $id)->first();
            $comments = $post->comments()->get();

            $view = [
                'post' => $post,
                'comments' => $comments
            ];
            return view('posts.show', $view);
        }
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (!Auth::check()) {
            return redirect('login');
        } else {


            $post = Postingan::where('id', $id)
                ->first();

            $view = [
                'post' => $post
            ];
            return view('posts.edit', $view);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if (!Auth::check()) {
            return redirect('login');
        } else {


            $title = $request->input('title');
            $content = $request->input('content');

            Postingan::where('id', $id)
                ->update([
                    'title' => $title,
                    'content' => $content,
                    'updated_at' => date('Y-m-d H:i:s'),
                ]);
            return redirect("posts");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!Auth::check()) {
            return redirect('login');
        } else {
            Postingan::where('id', $id)
                ->delete();

            return redirect('posts');
        }
    }
}