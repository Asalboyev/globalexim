<?php

namespace App\Http\Controllers;

use App\Models\Lang;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::latest()->paginate(10);
        return view('app.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $languages = Lang::all();
        return view('app.posts.create', compact('languages'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title.ru' => 'required',
            'desc.ru' => 'required',
            'img' => 'required'
        ]);

        $data = $request->all();

        if($request->hasFile('img')) {
            $path = $request->file('img')->store('upload/posts', 'public');
            $data['img'] = $path;
        }

        Post::create($data);

        return redirect()->route('posts.index')->with(['message' => 'Successfully added!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        $languages = Lang::all();
        return view('app.posts.edit', compact('post', 'languages'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title.ru' => 'required',
            'desc.ru' => 'required'
        ]);

        $data = $request->all();

        if($request->hasFile('img')) {
            $path = $request->file('img')->store('upload/images', 'public');
            $data['img'] = $path;
        }

        $post->update($data);

        return redirect()->route('posts.index')->with(['message' => 'Successfully updated!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::find($id)->delete();

        return redirect()->route('posts.index')->with(['message' => 'Successfully deleted!']);
    }
}
