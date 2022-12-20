<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post\{ Post, Category };
use App\Models\User;
Use Illuminate\Support\Str;
use Illuminate\Support\Facades\File; 
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json([
            'status' => true,
            'message' => 'Data posts berhasil didapatkan',
            'data' => Post::with(['user', 'category'])->latest()->paginate(5)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return response()->json([
            'status' => true,
            'message' => '',
            'categories' => Category::all(),
            'users' => User::all()
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

        $post = Post::create($validatedData);

        return response()->json([
            'status' => true,
            'message' => 'Post berhasil ditambahkan',
            'data' => $post
        ]);
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

    
        return response()->json([
            'status' => true,
            'message' => 'Data post berhasil didapatkan',
            'post' => $post->load(['user', 'category']),
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
        return response()->json([
            'status' => true,
            'message' => '',
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
        $post = Post::find($id)->update($validatedData);
        return response()->json([
            'status' => true,
            'message' => 'Data post berhasil diupdate',
            'post' => $post
        ]);
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
        return response()->json([
            'status' => true,
            'message' => 'Data post berhasil dihapus',
            'post' => $post
        ]);
    }







    public function categories(Category $category)
    {
        return response()->json([
            'status' => true,
            'message' => 'Menampilkan post berdasarkan category',
            'data' => Post::where('category_id', $category->id)->with(['user', 'category'])->latest()->paginate(5)
        ]);
    }

    public function authors(User $user)
    {
        return response()->json([
            'status' => true,
            'message' => 'Menampilkan post berdasarkan penulis',
            'data' => Post::where('user_id', $user->id)->with(['user', 'category'])->latest()->paginate(5)
        ]);
    }
}
