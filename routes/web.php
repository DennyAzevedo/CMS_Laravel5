<?php
/*
//////////////////////////////////////////////////////////////////////////
// Criacao...........: 12/2021
// Sistema...........: CMS
// Desenvolvedores...: Denny Paulista Azevedo Filho
// Copyright.........: Denny Paulista Azevedo Filho
//////////////////////////////////////////////////////////////////////////
*/

Route::get('/', 'Site\HomeController@index');

Route::prefix('painel')->group(function(){
    Route::get('/', 'Admin\HomeController@index')->name('admin');

    Route::get('login', 'Admin\Auth\LoginController@index')->name('login');
    Route::post('login', 'Admin\Auth\LoginController@authenticate');

    Route::get('register', 'Admin\Auth\RegisterController@index')->name('register');
    Route::post('register', 'Admin\Auth\RegisterController@register');

    Route::post('logout', 'Admin\Auth\LoginController@logout')->name('logout');
});
