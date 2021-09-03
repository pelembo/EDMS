<?php

use Illuminate\Support\Facades\Route;


Route::resource('workGroups', 'WorkGroupController');

Route::resource('documentTypes', 'Document_TypeController');

Route::resource('employees', 'EmployeeController');

Route::resource('states', 'StateController');

Route::resource('documents', 'DocumentController');