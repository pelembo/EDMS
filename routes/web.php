<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [
    HomeController::class, 'index'
])->name('home');


Route::get('generator_builder', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@builder')->name('io_generator_builder');

Route::get('field_template', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@fieldTemplate')->name('io_field_template');

Route::get('relation_field_template', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@relationFieldTemplate')->name('io_relation_field_template');

Route::post('generator_builder/generate', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@generate')->name('io_generator_builder_generate');

Route::post('generator_builder/rollback', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@rollback')->name('io_generator_builder_rollback');

Route::post(
    'generator_builder/generate-from-file',
    '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@generateFromFile'
)->name('io_generator_builder_generate_from_file');




Route::resource('users', App\Http\Controllers\UserController::class)->middleware('auth');

Route::resource('permissions', App\Http\Controllers\PermissionsController::class)
    ->only(['index', 'edit', 'update'])->middleware('auth');

Route::resource('roles', App\Http\Controllers\RolesController::class)->middleware('auth');

Route::resource('roles-assignment', App\Http\Controllers\RolesAssignmentController::class)
    ->only(['index', 'edit', 'update'])->middleware('auth');


Route::resource('activityLogs', App\Http\Controllers\ActivityLogController::class)->middleware('auth');


Route::resource('documents', App\Http\Controllers\DocumentController::class)->middleware('auth');


Route::resource('documentTypes', App\Http\Controllers\DocumentTypeController::class)->middleware('auth');


Route::resource('employees', App\Http\Controllers\EmployeeController::class)->middleware('auth');


Route::resource('states', App\Http\Controllers\StateController::class)->middleware('auth');


Route::resource('workGroups', App\Http\Controllers\WorkGroupController::class)->middleware('auth');
