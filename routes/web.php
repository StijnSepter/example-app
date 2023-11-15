<?php
use App\Models\Post;
use App\Models\Blogg;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\SearchController;

Route::get('/', function () {
        return view('welcome',[
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


Route::get('/search', [SearchController::class, 'search'])->name('search');
