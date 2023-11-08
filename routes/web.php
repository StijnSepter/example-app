<?php
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use Illuminate\Support\Facades\File;

Route::get('/', function () {
        return view('welcome',[
            'post' => Post::all()
        ]);
});

Route::get('post/{post}', function ($id) {
    return view('post', [
        'post' => Post::find($id)
    ]);
});

Route::get('/post', function () {
    return view('post',[
        'posts' => Post::all()
    ]);
});


// mee bezig
Route::get('blogg/{blogg}', function ($item){
    return view('blogg', [
        'blogg' => Blogg::all()
    ]);
});