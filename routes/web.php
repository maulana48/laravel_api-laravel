<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{ AuthController, EController, BlogController };
use App\Models\Post\{ Post, Category };
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});

Route::prefix('')
    ->name('auth.')
    ->controller(AuthController::class)
    ->group(function(){
        Route::any('/login', 'login')->name('login')->middleware('test1');
        Route::any('/logout', 'logout')->name('logout');
        Route::any('/registration', 'registration')->name('registration');
    });

Route::prefix('user')
    ->middleware('test')
    ->group(function(){
    Route::get('/', function () {
        return view('user.index', [
            'title' => 'Homepage',
            'icon' => 'b.png'
        ]);
    })->name('user.index');

    Route::get('/show/{id}', function ($id) {
        return view('user.show', [
            'title' => 'Userpage',
            'icon' => 'a.png',
            'id' => $id -1
        ]);
    })->name('user.show');
});

Route::prefix('e-commerce')
    ->name('ec.')
    ->middleware('test')
    ->controller(Econtroller::class)
    ->group(function(){
        Route::get('/', 'index')->name('index');
        Route::get('/show/{id}', 'show')->name('show');
        Route::get('/create', 'create')->name('create');
        Route::get('/edit/{id}', 'edit')->name('edit');

        Route::post('/store', 'store')->name('store');
        Route::post('/update/{id}', 'update')->name('update');
        Route::post('/destroy/{id}', 'destroy')->name('destroy');
});

Route::prefix('Blog')
    ->name('blog.')
    ->middleware('test')
    ->controller(BlogController::class)
    ->group(function(){
        Route::get('/', 'index')->name('index');

        Route::get('/show/{id}', 'show')->name('show');
        Route::get('/create', 'create')->name('create');
        Route::get('/edit/{id}', 'edit')->name('edit');

        Route::post('/store', 'store')->name('store');
        Route::post('/update/{id}', 'update')->name('update');
        Route::post('/destroy/{id}', 'destroy')->name('destroy');
});

Route::prefix('Blog')
    ->name('blog.')
    ->group(function(){
        Route::get('/categories/{category}', function(Category $category){
            return view('Blogs.index', [
                'title' => 'Blog Posts',
                'icon' => 'Blog/icon.png',
                'posts' => Post::where('category_id', $category->id)->with(['user', 'category'])->latest()->paginate(5)
            ]);
        })->name('categories');
        
        Route::get('/authors/{user}', function(User $user){
            return view('Blogs.index', [
                'title' => 'Blog Posts',
                'icon' => 'Blog/icon.png',
                'posts' => Post::where('user_id', $user->id)->with(['user', 'category'])->latest()->paginate(5)
            ]);
        })->name('authors');
});

