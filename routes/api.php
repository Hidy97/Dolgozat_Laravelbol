<?php

use App\Http\Controllers\AdditionalController;
use App\Http\Controllers\BottomController;
use App\Http\Controllers\OutfitController;
use App\Http\Controllers\UpperController;
use App\Http\Controllers\UserController;
use App\Models\Upper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('bottoms', [BottomController::class, 'index']);
Route::get('bottoms/{id}', [BottomController::class, 'show']);
Route::post('bottoms', [BottomController::class, 'store']);
Route::put('bottoms/{id}', [BottomController::class, 'update']);
Route::delete('bottoms/{id}', [BottomController::class, 'destroy']);

Route::get('api/users', [UserController::class, 'index']);

//ezeket a web.php-ba
Route::get('/bottoms/new', [BottomController::class, 'newView']);
Route::get('/bottoms/edit/{id}', [BottomController::class, 'editView']);
Route::get('/bottoms/list', [BottomController::class, 'listView']);
///
///

Route::get('api/uppers', [UpperController::class, 'index']);
Route::get('api/uppers/{id}', [UpperController::class, 'show']);
Route::post('api/uppers', [UpperController::class, 'store']);
Route::put('api/uppers/{id}', [UpperController::class, 'update']);
Route::delete('api/uppers/{id}', [UpperController::class, 'destroy']);

Route::get('/uppers/new', [UpperController::class, 'newView']);
Route::get('/uppers/edit/{id}', [UpperController::class, 'editView']);
Route::get('/uppers/list', [UpperController::class, 'listView']);

///
///

Route::get('api/additionals', [AdditionalController::class, 'index']);
Route::get('api/additionals/{id}', [AdditionalController::class, 'show']);
Route::post('api/additionals', [AdditionalController::class, 'store']);
Route::put('api/additionals/{id}', [AdditionalController::class, 'update']);
Route::delete('api/additionals/{id}', [AdditionalController::class, 'destroy']);

Route::get('/additionals/new', [AdditionalController::class, 'newView']);
Route::get('/additionals/edit/{id}', [AdditionalController::class, 'editView']);
Route::get('/additionals/list', [AdditionalController::class, 'listView']);

///
///

Route::get('api/outfits', [OutfitController::class, 'index']);
Route::get('api/outfits/{id}', [OutfitController::class, 'show']);
Route::post('api/outfits', [OutfitController::class, 'store']);
Route::put('api/outfits/{id}', [OutfitController::class, 'update']);
Route::delete('api/outfits/{id}', [OutfitController::class, 'destroy']);

Route::get('/Outfits/new', [OutfitController::class, 'newView']);
Route::get('/Outfit/edit/{id}', [OutfitController::class, 'editView']);
Route::get('/Outfit/list', [OutfitController::class, 'listView']);