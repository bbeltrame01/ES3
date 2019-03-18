<?php



Route::group(['middleware' => ['auth'], 'namespace' => 'Admin'], function(){
    Route::get('movement', 'MovementController@index')->name('admin.movement');
    Route::get('dashboard', 'AdminController@index')->name('admin.home');
});
Route::get('/', 'Site\SiteController@index')->name('dashboard');

/*
============================ login =====================================
*/
/*Route::get('/login', ['uses' => 'controller@fazerLogin']);
Route::post('/login', ['as' => 'user.login', 'uses' => 'controller@auth']);*/

Auth::routes();

