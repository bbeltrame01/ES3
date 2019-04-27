<?php



Route::group(['middleware' => ['auth'], 'namespace' => 'Admin'], function(){
    Route::get('dashboard', 'AdminController@index')->name('admin.home');
    Route::get('settings', 'AdminController@settings')->name('admin.settings');
    Route::get('register/card', 'RegisterController@card')->name('register.card');
    Route::get('register/card/new', 'RegisterController@new_card')->name('register.new_card');
    Route::get('register/account', 'RegisterController@account')->name('register.account');
    Route::get('register/account/new', 'RegisterController@new_account')->name('register.new_account');
    Route::post('new_account', 'RegisterController@new_accountRegister')->name('new_account.register');
    Route::get('movement/new', 'MovementController@new_movement')->name('movement.new_movement');
    Route::get('movement/transfer', 'MovementController@transfer')->name('movement.transfer');
    Route::get('movement/income','MovementController@income')->name('movement.income');
    Route::get('movement/spent', 'MovementController@spent')->name('movement.spent');
    Route::get('receipt/income', 'ReceiptController@income')->name('receipt.income');
    Route::get('receipt/buy', 'ReceiptController@buy')->name('receipt.buy');
    Route::post('upload_buy', ['as' => 'files.upload.buy', 'uses' => 'ReceiptController@upload_buy']);
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

