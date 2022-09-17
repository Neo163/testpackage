<?php

use Illuminate\Support\Facades\Route;

// 测试demo
Route::get('admin/hello', 'Neo163\Testpackage\Controllers\Test\HelloWorldController@hello');
Route::get('admin/test', 'Neo163\Testpackage\Controllers\Test\HelloWorldController@test');
