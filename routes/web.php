<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CollectionController;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ExampleController;
use App\Http\Controllers\MembersController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\MobileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\DeploymentController;
use App\Http\Controllers\SongController;
use App\Http\Controllers\SingerController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\CodeController;
use Illuminate\Support\Facades\Log;

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

//collection
Route::get('/student', [StudentController::class, 'index']);

//response
Route::get('/response', function () {
    dd(response('this first response'));
});

//pagination
Route::get('list', [MembersController::class, 'show']);


//Error and Logging
Route::get('/process-code/{code}', [CodeController::class, 'processCode']);
Route::get('/log', function () {
    Log::error('This is my testing log.');
    dd("done");
});
Route::get('/index', [ExampleController::class, 'index']);

//one to one
Route::get('/data',[IndexController::class,'Index']);

//one to many
Route::get('group',[IndexController::class,'Index']);