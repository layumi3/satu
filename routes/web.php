<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', function () use ($app) {
  $res['success'] = true;
  $res['result'] = "Hello there! hai hai ";
  return response($res);
});
$app->post('/login', 'LoginController@index');
$app->post('/register', 'UserController@register');
$app->get('/user/{id}', ['middleware' => 'auth', 'uses' =>  'UserController@get_user']);

/*route kategori*/
$app->get('/category', 'CategoryController@index');
 $app->get('/category/{id}', 'CategoryController@read');
 $app->post('/category', 'CategoryController@create');
 $app->post('/category/update/{id}', 'CategoryController@update');
 $app->post('/category/delete/{id}', 'CategoryController@delete');

/*route item/produk yang disewakan*/
  $app->get('/item_ads', 'ItemAdsController@index');
  $app->get('/item_ads/{id}', 'ItemAdsController@read');
  $app->get('/item_ads/delete/{id}', 'ItemAdsController@delete');
  $app->post('/item_ads/create', 'ItemAdsController@create');
  $app->post('/item/update_ads/{id}', 'ItemAdsController@update');