<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Posts::all();
        // dd($post);
        return view('welcome',  ['posts' => $posts]);
    }

    public function detailPost(Posts $id)
    {
        //route model binding
        return view('detail', ['postId' => $id]);
    }

    public function EditRecord($id, $titleModified, $contentModified, $exceptModified, $imageModified)
    {
        $post = Posts::find($id);

        $post->title = $titleModified;
        $post->except = $exceptModified;
        $post->content = $contentModified;
        $post->image = $imageModified;
        $post->save();
    }
}
