<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\ImageController;
use App\Models\FileUpload;

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
Route::post('upload-file',[ImageController::class,'file']);
Route::get('get-file/{id}',[ImageController::class,'getFile']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});