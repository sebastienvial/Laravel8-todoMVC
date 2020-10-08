<?php

use Illuminate\Support\Facades\Route;

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

use App\Http\Controllers\TaskController;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('tasks', function () {
//     return 'Tasks list';
// });

// Route::get('tasks/{id}', 'App\Http\Controllers\TaskController@showTask');

// Route::get('tasks/test/{id}', function ($id) {
//     return view('task', ['id' => $id]);
// });

// Route::get('tasks', [TaskController::class, 'showIndex']) ->name('tasks.index');
// Route::post('tasks', [TaskController::class, 'createTask']) ->name('tasks.create');
// Route::put('tasks', [TaskController::class, 'updateTask']) ->name('tasks.update');
// Route::delete('tasks', [TaskController::class, 'deleteTask']) ->name('tasks.delete');

Route::resource('tasks', TaskController::class);

Route::get('/', function() {
    return redirect()->route('tasks.index');
});
