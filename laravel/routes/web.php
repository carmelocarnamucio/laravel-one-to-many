<?php

use Illuminate\Support\Facades\Route;



Route::get('/', 'MainController@taskIndex') -> name('task-index');
Route::get('/employee', 'MainController@employeeIndex') -> name('employee-index');
