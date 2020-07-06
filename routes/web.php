<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Web', 'as' => 'web.'  ], function() {
  Route::get('/',         'WebController@home')->name('home');
  Route::get('/sobre',    'WebController@about')->name('about');
  Route::get('/solucoes', 'WebController@services')->name('services');
  Route::get('/solucoes/desenvolvimento-web',   'WebController@development')->name('services.development');
  Route::get('/solucoes/sites',                 'ServicesController@sites')->name('services.sites');
  Route::get('/solucoes/blogs',                 'ServicesController@blogs')->name('services.blogs');
  Route::get('/solucoes/lojas-virtuais',        'ServicesController@ecommerce')->name('services.ecommerce');
  Route::get('/solucoes/sistemas-web',          'ServicesController@web')->name('services.web');

  Route::get('/contato',  'WebController@contact')->name('contact');
});
