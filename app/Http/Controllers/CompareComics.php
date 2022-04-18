<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class CompareComics extends Controller
{
    public function store(Request $request){
    $a=$request->getContent();
    
    dump(json_decode($a));
            
    }
}
