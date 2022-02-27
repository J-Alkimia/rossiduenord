<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Folder;
use App\Http\Resources\FolderResource;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('bank')
->namespace('Bank')
->name('bank.')
->prefix('bank')
->group(function () {
    Route::resource('folders', 'API\FolderController@index');

});
Route::get('folders', 'Bank\API\FolderController@index');
Route::get('folders/{folder}', function (Folder $folder) {
    return new FolderResource($folder);
});