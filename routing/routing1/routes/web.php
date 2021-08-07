<?php

use Illuminate\Support\Facades\Route;

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



// Route::view('/welcome', 'welcome', ['name' => 'Taylor']);
// Route::get('/user/{ism}', function ($ism) {
//     return 'User '.$ism;
// });
Route::get('/posts/{post}/comments/{comment}', function
 ($postId, $commentId) {
    return('post' . $postId . '<br>' . 'comment' . $commentId);
});
// Route::get('/user/{name?}', function ($name = 'jo') {
//     return $name;
// });
// Route::get('/user/{id}/{name}', function ($id, $name) {
//     //
// })->where(['id' => '[0-9]+', 'name' => '[a-z]+']);

Route::get('/search/{search}', function ($search) {
    return $search;
})->where('search', '.*');


Route::get('/user/{id}/profile', function ($id) {
    //
})->name('profile');

$url = route('profile', ['id' => 1, 'photos' => 'yes']);