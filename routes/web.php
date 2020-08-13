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


Route::get('/hello', function() {
  return "Hello World";
});

Route::get('user/{id}', function($id) {
  echo "ID cua user la " . $id;
});

Route::get('posts', function() {
  echo "trang post nay";
})->name('posts.lists');

Route::group(['prefix' => 'admin'], function() {
  Route::get('nhom1', function() {
    echo "admin nhom 1";
  });

  Route::get('nhom2', function() {
    echo "admin nhom 2";
  });
});

Route::get('admin/categories/{category}', 'PostController@getPostDetail');
Route::get('admin/{category}', 'PostController@getCategory');

Route::resource('photos', 'PhotoController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/thu-dung-helper', function() {
  return GetCategory::get_content_category(12);
});
