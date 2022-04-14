<?php

use Illuminate\Support\Facades\Route;
use App\Models\Comic;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('comics', ComicController::class);

Route::post('compare', 'ComicController@compare');
/*
Route::post('compare', function(Request $request) {
    dd($request);
    $comics = Comic::paginate();
    return view('comic.index', compact('comics'))
    ->with('i', (request()->input('page', 1) - 1) * $comics->perPage());
});
*/