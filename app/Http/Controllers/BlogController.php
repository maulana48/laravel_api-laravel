<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post\{ Post, Category };
use App\Models\User;
Use Illuminate\Support\Str;
use Illuminate\Support\Facades\{ Auth, File, DB };

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Blogs.index', [
            'title' => 'Blog Posts',
            'icon' => 'Blog/icon.png',
            'posts' => Post::with(['user', 'category'])->latest()->paginate(5)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Blogs.create', [
            'title' => 'Create Posts',
            'icon' => 'Blog/icon.png',
            'categories' => Category::all(),
            'userId' => Auth::id()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'title' => 'required',
            'slug' => 'required',
            'category_id' => 'required',
            'user_id' => 'required',
            'body' => 'required',
        ];
        $validatedData = $request->validate($rules);
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200, '...');
        
        if($request->file('image')){
            $validatedData['image'] = $request->file('image')->store('img/Blog', ['disk' => 'public_uploads']);
        }

        Post::create($validatedData);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $posts = Post::all();
        $post = $posts->find($id);
        $latest = Post::latest()->limit(3)->with(['user', 'category'])->get();
        $i = $id - 1;
        $PVpost = $posts->find($i);
        $i = $id + 1;
        $NXpost = $posts->find($i);
        $user = $post->user;
        return view('Blogs.show', [
            'title' => $post->title,
            'icon' => 'Blog/icon.png',
            'post' => $post,
            'user' => $user,
            'PVpost' => $PVpost,
            'NXpost' => $NXpost,
            'latest' => $latest
        ]);
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
        return view('Blogs.edit', [
            'title' => 'Create Posts',
            'icon' => 'Blog/icon.png',
            'post' => $post,
            'categories' => Category::all()
        ]);
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
        $rules = [
            'title' => 'required',
            'slug' => 'required',
            'category_id' => 'required',
            'user_id' => 'required',
            'body' => 'required',
        ];
        $validatedData = $request->validate($rules);
        if($request->image){
            $validatedData['image'] = $request->file('image')->store('img/Blog', ['disk' => 'public_uploads']);
        }
        Post::find($id)->update($validatedData);
        return redirect()->route('blog.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        if($post->image != 'img/Blog/error.PNG'){
            File::delete(public_path($post->image));
        }
        $post->delete();
        return redirect()->route('blog.index');
    }
}
