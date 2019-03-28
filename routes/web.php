<?php



Route::group(['middleware' => ['auth'], 'namespace' => 'Admin'], function(){
    Route::get('dashboard', 'AdminController@index')->name('admin.home');
    Route::get('register/card', 'RegisterController@card')->name('register.card');
    Route::get('register/account', 'RegisterController@account')->name('register.account');
    Route::get('movement/new', 'MovementController@new_movement')->name('movement.new_movement');
    Route::get('movement/transfer', 'MovementController@transfer')->name('movement.transfer');
    Route::get('movement/income','MovementController@income')->name('movement.income');
    Route::get('movement/spent', 'MovementController@spent')->name('movement.spent');
    Route::get('receipt/income', 'ReceiptController@income')->name('receipt.income');
    Route::get('receipt/buy', 'ReceiptController@buy')->name('receipt.buy');
    Route::get('objective', 'ObjectiveController@index')->name('objective');
    Route::get('report/extract/account', 'ReportController@account')->name('report.extract.account');
    Route::get('report/extract/card', 'ReportController@card')->name('report.extract.card');
    Route::get('report/movements/balance', 'ReportController@balance')->name('report.movements.balance');
    Route::get('report/movements/releases', 'ReportController@releases')->name('report.movements.releases');
    
});
Route::get('/', 'Site\SiteController@index')->name('dashboard');

/*
============================ login =====================================
*/
/*Route::get('/login', ['uses' => 'controller@fazerLogin']);
Route::post('/login', ['as' => 'user.login', 'uses' => 'controller@auth']);*/

Auth::routes();

