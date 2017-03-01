<?php
Route::group(['prefix' => 'admin','namespace' => 'Admin'], function(){
    // �
    Route::any('/login','LoginController@login');
    Route::any('/index','IndexController@index');
    Route::any('/top','IndexController@top');
    Route::any('/menu','IndexController@menu');
    Route::any('/main','IndexController@main');

});
