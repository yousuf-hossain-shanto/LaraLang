<?php

Route::group(['middleware' => ['web']], function() {

	Route::get('laralang-change/{lang}', 'YHShanto\LaraLang\Controllers\LaraLangController@change')->name('laralang.change');

});