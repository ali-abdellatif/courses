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

//Route::get('/', function () {
//    return view('front.home');
//});
Route::group(['namespace'=>'Front'],function (){
    Route::get('/','FrontEndController@home');
    Route::get('about','FrontEndController@about');
    Route::get('contact','FrontEndController@contact');
    Route::post('contact','FrontEndController@contactPost');
    Route::get('courses','FrontEndController@course');
    Route::get('subCategory/{id}','FrontEndController@subCategory');
    Route::group(['middleware'=>['web','student']],function (){
        Route::get('lesson','FrontEndController@lesson');
        Route::get('booking/{id}','FrontEndController@booking');
    });
});


/*   Admin Panel Route    */
Route::group(['middleware'=>['web','admin'],'namespace'=>'Admin'],function (){
    Route::get('master','HomeController@index');
    Route::resource('user','UserController');
    Route::resource('role','RoleController');
    Route::resource('category','CategoryController');
    Route::resource('Permission','PermissionController');
    Route::resource('subcategory','SubCategoryController');
    Route::resource('course','CourseController');
    Route::resource('video','VideoController');
    Route::resource('message','MessageController');
    Route::resource('event','EventController');
});


/* Instructor Panel Route */

Route::group(['middleware'=>['web','instructor'],'namespace'=>'Instructor'],function (){
    Route::get('instructor','HomeController@index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
