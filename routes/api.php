<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/teste', function(Request $request){

    // dd($request->headers->all());
    // dd($request->headers->get('Authorization'));

    $response = new \Illuminate\Http\Response(json_encode(['msg' => 'Minha primeira api']));
    $response->header('Content-Type', 'application/json');

    return $response;
});

//Products Routes
Route::get('/products', function(){
    return \App\Models\Product::all();
});
