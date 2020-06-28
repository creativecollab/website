<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Web', 'as' => 'web.'  ], function() {
  Route::get('/',         'WebController@home')->name('home');
  Route::get('/sobre',    'WebController@about')->name('about');
  Route::get('/solucoes', 'WebController@services')->name('services');
  Route::get('/solucoes/desenvolvimento-web', 'WebController@development')->name('services.development');
  Route::get('/solucoes/seo', 'WebController@seo')->name('services.seo');
  Route::get('/solucoes/design-grafico', 'WebController@design')->name('services.design');
  Route::get('/solucoes/sites', 'WebController@sites')->name('services.sites');

  Route::get('/contato',  'WebController@contact')->name('contact');
});
