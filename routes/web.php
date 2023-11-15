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


Route::get('/blogg/{id}', function ($id) {
    return view('blogg',[
        'posts' => Post::all(),
        'blogg' => Blogg::findOrFail($id),
    ]);
});

Route::get('/results', 'SearchController@search')->name('search');