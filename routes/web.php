<?php
use App\Models\Post;
use App\Models\Blogg;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use Illuminate\Support\Facades\File;

Route::get('/', function () {
        return view('welcome',[
            'post' => Post::all(),
            'blogg' => Blogg::all(),
            'search' => Blogg::where("title") -> orWhere("%%"),
        ]);
});

Route::get('post/{post}', function ($id) {
    return view('post', [
        'post' => Post::find($id),
    ]);
});

Route::get('/post/{post}', function () {
    return view('post',[
        'posts' => Post::all(),
        'blogg' => Blogg::all(),
    ]);
});

Route::get('/results', 'SearchController@search')->name('search');