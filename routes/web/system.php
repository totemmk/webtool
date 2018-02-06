<?php 

Route::prefix('system')->group(function () {
    
    Route::get('users', 'Web\System\UsersController@index')->name('system.users.index');
    Route::get('users/create', 'Web\System\UsersController@create')->name('system.users.create');

    Route::resource('users', 'Web\System\UsersController');
    Route::resource('rolles', 'Web\System\RollesController');
    Route::resource('options', 'Web\System\OptionsController');
    Route::resource('packages', 'Web\System\PackagesController');
    Route::resource('companies', 'Web\System\CompaniesController');
    Route::resource('privileges', 'Web\System\PrivilegesController');
    Route::resource('params', 'Web\System\ParamsController');
    Route::resource('currencies', 'Web\System\CurrenciesController');
    Route::resource('equivalences', 'Web\System\EquivalencesController');

});

?>
