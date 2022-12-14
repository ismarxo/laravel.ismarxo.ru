<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Todo;

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

Route::get('/todo', [Todo::class, 'getIssuesAssignedByUserId']);

Route::post('/todo/add', [Todo::class, 'createIssue']);
Route::post('/todo/delete', [Todo::class, 'deleteIssue']);
Route::post('/todo/delete/all', [Todo::class, 'deleteAllIssues']);
Route::post('/todo/complete', [Todo::class, 'simpleCompleteOfIssue']);
Route::post('/todo/uncomplete', [Todo::class, 'simpleUncompleteOfIssue']);

