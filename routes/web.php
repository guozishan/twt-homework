<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/test', function () {
    return view('welcome');
});
Route::get('index', 'AddPostController@index');//留言列表路由
Route::get('add', 'AddPostController@add');//留言添加界面展示
Route::post('add', 'AddPostController@addPost');//处理留言添加
Route::match(['get','post'],'edit/{id}', 'AddPostController@edit')->where('id','[0-9]{1,3}');//同时处理留言编辑的界面展示和提交修改留言功能
Route::get('del/{id}', 'AddPostController@del');//删除留言