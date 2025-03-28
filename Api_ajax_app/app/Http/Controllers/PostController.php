<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Composer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class PostController extends Controller
{
    public function index()
    {
        return view('admin_post');
    }


    public function store(Request $request)
    {
        $userid = Auth::user()->id;
        $request->validate([
            'post_title' => 'required',
            'post_desc'  => 'required',
            'image' => 'required|mimes:jpeg,png,jpg,gif,svg',
            'post_date'  => 'required',
        ]);
        $post_data = new Post;
        $post_data->post_title = $request->post_title;
        $post_data->post_desc = $request->post_desc;
        $post_image = time() . '.' . $request->image->extension();
        $request->image->move(public_path('post_image/'), $post_image);
        $post_data->image = $post_image;
        $post_data->user_id = $userid;
        $post_data->post_date = $request->post_date;
        $post_data->save();

        return redirect(route('post.show', Auth::id()));
    }

    public function show(int $id)
    {
        $post_data = Post::where('user_id', Auth::id())->get();
        return view('admin_post_data', ['post_datas' => $post_data], compact('post_data'));
    }

    public function edit($id)
    {
        $up_data_post = Post::find($id);

        return view('admin_post_update', ['updata' => $up_data_post]);
    }
    public function update(Request $request, $id)
    {
        $userid = Auth::user()->id;
        $request->validate([
            'post_title' => 'required',
            'post_desc'  => 'required',
            'image' => 'required|mimes:jpeg,png,jpg,gif,svg',
            'post_date'  => 'required',
        ]);
        $post_data = Post::find($id);
        $post_data->post_title = $request->post_title;
        $post_data->post_desc = $request->post_desc;
        $post_image = time() . '.' . $request->image->extension();
        $request->image->move(public_path('post_image/'), $post_image);
        $post_data->image = $post_image;
        $post_data->user_id = $userid;
        $post_data->post_date = $request->post_date;
        $post_data->save();

        return redirect(route('post.show', Auth::id()));
    }
    public function home()
    {
        $post_data = Post::all();
        return view('home', ['post_data' => $post_data]);
    }

    public function destroy(string $id)
    {
        Post::destroy($id);
        return redirect(route('post.show', Auth::id()));
    }
    public function viewprofile(int $id)
    {
        if (Gate::allows('viewprofile', $id)) {

            $profile_id = User::find($id);
        }
        return view('user_profile', compact('profile_id'));
    }
}
