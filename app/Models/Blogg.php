<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blogg extends Model
{
    use HasFactory;
    protected $fillable = ["title","excerpt","body","url","user","icon","icon_name","icon_tekt","published_at"];
}
