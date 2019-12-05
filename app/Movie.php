<?php

namespace App;
use App\Request;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $guarded = ["id"];

    static function search(Request $request){
      return  Movie::query()->where('title', 'LIKE', "%{$searchVal}%")->orderBy('title')->get();
    }
}
