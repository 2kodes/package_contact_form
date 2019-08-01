<?php


use \Illuminate\Support\Facades\Route;

use \TwoKodes\Contactform\Http\Controllers;


Route::group(['middleware'=>['web'],'namespace'=>'TwoKodes\Contactform\Http\Controllers'],function(){

    Route::get('contact','ContactFormController@index');
    Route::post('contact','ContactFormController@sendMail')->name('contact');

});
