<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;
use DB;

class CompareComics extends Controller  
{
    public function store(Request $request){
    $marvelcomics=json_decode($request->getContent())->results;
    
    $preparedArray = [];
    foreach($marvelcomics as $mcomic){

        if($mcomic->ean == ""){
            $mcomic->ean = null;
        };
        if($mcomic->isbn == ""){
            $mcomic->isbn = null;
        };
        if($mcomic->issn == ""){
            $mcomic->issn = null;
        };
        if($mcomic->upc == ""){
            $mcomic->upc = null;
        };
        $mcomicFiltred = collect($mcomic);
        array_push($preparedArray, collect($mcomicFiltred)->only(['title', 'isbn', 'issn', 'ean','upc'])->toArray());
    }

  
    
    DB::table('comics')->insertOrIgnore($preparedArray);


}
}
