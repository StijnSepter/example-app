<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blogg extends Model
{
    use HasFactory;
    protected $filable = ["title","excerpt","body","url","user","icon","icon_name","icon_tekt","published_at"];

    public function search(Request $request)
    {
        $query = $request->input('query');
 
        $results = Blogg::where('column_name', 'LIKE', '%' . $query . '%')->get();
 
        return view('search.results', ['results' => $results]);
    }
}
