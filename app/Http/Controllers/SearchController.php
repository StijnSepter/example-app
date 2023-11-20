<?php

// app/Http/Controllers/SearchController.php

namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Blogg;
use Illuminate\Http\Request;

class SearchController extends BaseController
{
    public function search(Request $request)
    {
        $query = $request->input('query');
    
        $posts = Blogg::where('title', 'like', '%' . $query . '%')->get();
    
        return view('results', compact('posts', 'query'));
    }
}