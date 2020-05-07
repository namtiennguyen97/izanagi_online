<?php

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

Route::get('/','DisplayController@index')->name('main.index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/page-guest', 'HomeController@showPageGuest')->name('user.page');
Route::get('/page-admin', 'HomeController@showPageAdmin')->name('admin.page');

Route::get('/rule', function (){
   return view('rules.rule');
})->name('rules');

Route::group(['namespace'=>'Admin','prefix'=>'admin'], function (){
   Route::get('/main','UserController@index')->name('user.index');
   Route::get('/delete/{id}','UserController@delete')->name('user.delete');
});

//admin
Route::group(['namespace'=>'Admin','prefix'=>'hint'], function (){
   Route::get('/','HintController@index')->name('hint.index');
   Route::get('/add','HintController@create')->name('hint.create');
   Route::post('/add','HintController@store')->name('hint.store');
   Route::get('/destroy/{id}','HintController@destroy')->name('hint.destroy');
   Route::get('/edit/{id}','HintController@edit')->name('hint.edit');
   Route::post('edit/{id}','HintController@update')->name('hint.update');
});

Route::group(['namespace'=>'Admin','prefix'=>'bodyPage'], function (){
   Route::get('/','BodyPageController@index')->name('bodyPage.index');
   Route::get('/create','BodyPageController@create')->name('bodyPage.create');
   Route::post('/create','BodyPageController@store')->name('bodyPage.store');
   Route::get('/edit/{id}','BodyPageController@edit')->name('bodyPage.edit');
   Route::post('/edit/{id}','BodyPageController@update')->name('bodyPage.update');
   Route::get('/destroy/{id}','BodyPageController@destroy')->name('bodyPage.destroy');
});

Route::group(['namespace'=>'Admin','prefix'=>'item'],function (){
   Route::get('/','ItemController@index')->name('itemAdmin.index');
    Route::get('/add','ItemController@create')->name('items.create');
    Route::post('/add','ItemController@store')->name('items.store');
    Route::get('/edit/{id}','ItemController@edit')->name('items.edit');
    Route::post('/edit/{id}','ItemController@update')->name('items.update');
    Route::get('/delete/{id}','ItemController@destroy')->name('items.destroy');
});

Route::group(['namespace'=>'UserCan','prefix'=>'UserItems'], function (){
    Route::get('/','ItemController@index')->name('user.items.index');
    Route::get('/add','ItemController@create')->name('user.items.create');
    Route::post('/add','ItemController@store')->name('user.items.store');
});

Route::group(['namespace'=>'UserCan','prefix'=>'UserBlog'], function (){
   Route::get('/','BlogController@index')->name('user.blog.index');
   Route::get('/add','BlogController@create')->name('user.blog.create');
   Route::post('/add','BlogController@store')->name('user.blog.store');
});

//clientView
Route::group(['prefix'=>'items'], function (){
   Route::get('/','ItemController@index')->name('items.index');
});

Route::get('/blog','BlogController@index')->name('blog.index');
Route::get('/detail','HomeController@detailProfile')->name('detail.profile');
