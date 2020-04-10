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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('db')->group(function () {
    Route::get('insert', 'DbController@insert');
    Route::get('/', 'DbController@index');
    Route::get('/delete', 'DbController@delete');
    Route::get('/add', 'DbController@add');
    Route::get('/update', 'DbController@update');
});

Route::prefix('delete')->group(function () {
    Route::get('insert', 'DeleteController@insert');
});

Route::prefix('home')->group(function () {
    Route::get('index', 'UsersInfoController@index');
    Route::post('plus', 'UsersInfoController@plus');
});
Route::resource('index', 'UsersInfoController');
Route::resource('plus', 'UsersInfoController');

// Route::get('/test', 'TestController@index');
// Route::get('/home/test/test', 'TestController@test');
Route::prefix('home')->group(function () {
    Route::get('test', 'TestController@test');
});
Route::resource('test', 'TestController');

// Route::get('user/{id}', function ($id) {
//     return 'User '.$id;
// });

// Route::get('user/{name?}', function ($name = null) {
//     return $name;
// });

// Route::get('user/{name?}', function ($name = 'John') {
//     return $name;
// });
// Route::get('user/{id}/{name}', function ($id, $name) {
//     //
//     return 'User '.$id;
// })->where(['id' => '[0-9]+', 'name' => '[a-z]+']);

Route::get('search/{search}', function ($search) {
    return $search;
})->where('search', '.*');

// Route::get('user/profile', function () {
//     //
// })->name('profile');

// Route::get('user/{id}/profile', function ($id) {
//     //
// })->name('profile');

// $url = route('profile', ['id' => 1, 'photos' => 'yes']);
// Route::name('admin.')->group(function () {
//     Route::get('users', function () {
//         // 指定路由名为 「admin.users」...
//         return 11111;
//     })->name('users');
// });
// Route::get('profile/{user}', function (App\User $user) {
//     //
// });

Route::get('user/{id}', 'UserController@show');

// Route::get('/home/test/test6', 'TestController@test6');
// Route::post('/home/test/test7', 'TestController@test7') ->name('test7');

// Route::any('/home/test/test8', 'TestController@test8') ->name('test8');
// Route::get('/home/test/test9', 'TestController@test9');
// Route::get('/home/test/test10', 'TestController@test10');
// Route::get('/home/test/test11', 'TestController@test11');
// Route::get('/home/test/test12', 'TestController@test12');
// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
