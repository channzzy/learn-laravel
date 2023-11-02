<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function index(){
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    public function create(){
        return view('posts.create');
    }

    public function store(Request $request){
        //validate form
        $this->validate($request,[
            'image' => 'required|image|mimes:jpeg,jpg,gif,svg,png|max:2048',
            'title' => 'required|string|min:5',
            'konten' => 'required|min:10',
        ]);

        //upload image
        $image = $request->file('image');
        $image->storeAs('public/posts', $image->hashName());

        //create post
        Post::create([
            'image' => $image->hashName(),
            'title' => $request->title,
            'konten' => $request->konten,
        ]);
                //redirect to index
        return redirect()->route('posts.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function show($id){

        //get post by ID
        $post = Post::find($id);

        //return view
        return view('posts.show',compact('post'));
    }

    public function edit(Post $post){
        return view('posts.edit',compact('post'));
    }
    public function update(Request $request, Post $post){
        $this->validate($request,[
            'image' => 'required|image|mimes:jpeg,png,svg,gif|max:2048',
            'title' => 'required|min:5',
            'konten' => 'required|min:10'
        ]);

        //check if image is upload
        if($request->hasFile('image')){
            $image = $request->file('image');
            $image->storeAs('public/posts',$image->hashName());

            //delete old image
            Storage::delete('public/posts'.$post->$image);

            //update post with new image
            $post->update([
                'image'     => $image->hashName(),
                'title'     => $request->title,
                'konten'   => $request->konten
            ]);
        }else{
            //update post without image
            $post->update([
                'title' => $request->title,
                'konten' => $request->konten,
            ]);
        }
        return redirect()->route('posts.index')->with(['success' => 'Data Berhasil Di Update']);
    }

    public function destroy(Post $post){
        //delete image
        Storage::delete('public/posts'.$post->image);

        //delete post
        $post->delete();

        return redirect()->route('posts.index')->with(['success' => "Data berhasil dihapus"]);
    }
}
