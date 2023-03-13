<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
use App\Http\Controllers\UserControler;


Route::get('/', function () {
    return view('welcome');
});



//campeones league of legends
Route::get('/champions', function () {
    $champions = file_get_contents('https://ddragon.leagueoflegends.com/cdn/10.10.3216176/data/en_US/champion.json');
    $champions = json_decode($champions);

    return view('champions', compact('champions', 'items'));
});

//campeones league of legends
Route::get('/items', function () {
    $items = file_get_contents('https://ddragon.leagueoflegends.com/cdn/10.10.3216176/data/en_US/item.json');
    $items = json_decode($items);
    return view('items', compact('items'));
});



Route::get('/users', [UserControler::class, 'index']);