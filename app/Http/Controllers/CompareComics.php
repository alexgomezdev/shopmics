<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;
use DB;

class CompareComics extends Controller  
{
    public function store(Request $request){
    //$comics = Comic::paginate();
    $marvelcomics=json_decode($request->getContent())->results;
    $prueba = collect($marvelcomics[1])->only(['title', 'isbn', 'issn', 'ean','upc'])->toArray();
    //DB::table('comics')->insertOrIgnore(collect($mcomic)->only(['title', 'isbn', 'issn', 'ean','upc'])->toArray());
    $xd =  [
        ['title' => 'Marvel Previews (2017)', 'isbn' => 'wsadad', 'ean' => 'wadawd', 'upc' => 'wdaad', 'issn' => 'dadwa'],
        ['title' => 'Marvel Previews (2017)', 'isbn' => "null", 'ean' => null, 'upc' => '75960608839302611', 'issn' => null],
        ['title' => 'Storm (2006)', 'isbn' => null, 'ean' => null, 'upc' => 'awdadwa', 'issn' => null]
        ,
      ];
      $gh = [];
    //array_push($xd, collect($mcomic)->only(['title', 'isbn', 'issn', 'ean','upc'])->toArray());    
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
        array_push($gh, collect($mcomicFiltred)->only(['title', 'isbn', 'issn', 'ean','upc'])->toArray());
    }

  
    //dump($xd);                
    //Comic::insertOrIgnore($gh);
    DB::table('comics')->insertOrIgnore($gh);


}
}
