<?php


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/**Acl routes begins here */
Route::group(['middleware' => ['web']], function () {
    Route::resource('permission', 'Acl\PermissionController'); /** permissions management route controller */
    Route::resource('role', 'Acl\RoleController');/** roles management route controller  */
    Route::resource('user', 'Acl\UserController'); /**users management route controller */
});
  

