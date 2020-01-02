<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
  'prefix' => config('admin.route.prefix'),
  'namespace' => config('admin.route.namespace'),
  'middleware' => config('admin.route.middleware'),
], function (Router $router) {

  $router->get('/', function () { return view('admin_top'); });
  $router->get('/top', function () { return view('admin_top'); })->name('admin.top');
  $router->get('/home', 'HomeController@index')->name('admin.home');

  $router->get('/input/menu', function () { return view('admin_input_menu'); })->name('admin.input.menu');
  $router->get('/input/monthly', function () { return view('admin_input_monthly'); })->name('admin.input.monthly');
  $router->post('/input/monthly/save', function () { return view('admin_input_monthly'); })->name('admin.input.monthly.save');
  $router->get('/input/daily', function () { return view('admin_input_daily'); })->name('admin.input.daily');
  $router->post('/input/daily/save', function () { return view('admin_input_daily'); })->name('admin.input.daily.save');

});
