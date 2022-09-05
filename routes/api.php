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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

/*--create post under website---*/
Route::post('v1/create_post', [\App\Http\Controllers\Api\PostController::class, 'create'])->name('postCreate.api');;

/*--create website website---*/
// Route::post('v1/create_website', [App\Http\Controllers\Api\WebsiteController::class, 'create'])->name('websiteCreate.api');

/*--create subscriber for specific website---*/
Route::post('v1/create_subscriber', [App\Http\Controllers\Api\SubscriberController::class, 'create'])->name('subscriberCreate.api');
