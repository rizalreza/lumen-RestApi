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

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['prefix' => 'api'], function () use ($router) {
  $router->get('pegawai',  ['uses' => 'PegawaiController@showAllPegawai']);

  $router->get('pegawai/{id}', ['uses' => 'PegawaiController@showOnePegawai']);

  $router->post('pegawai', ['uses' => 'PegawaiController@create']);

  $router->delete('pegawai/{id}', ['uses' => 'PegawaiController@delete']);

  $router->put('pegawai/{id}', ['uses' => 'PegawaiController@update']);
});

$router->group(['prefix' => 'api'], function () use ($router) {
  $router->get('jabatan',  ['uses' => 'JabatanController@showAllJabatan']);

  $router->get('jabatan/{id}', ['uses' => 'JabatanController@showOneJabatan']);

  $router->post('jabatan', ['uses' => 'JabatanController@create']);

  $router->delete('jabatan/{id}', ['uses' => 'JabatanController@delete']);

  $router->put('jabatan/{id}', ['uses' => 'JabatanController@update']);
});