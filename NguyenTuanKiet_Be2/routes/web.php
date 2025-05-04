<?php

use App\Http\Controllers\CRUDController;
use App\Http\Controllers\EvaluteController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\WarehouseController;
use App\Http\Controllers\MakeAnAppointmentController;
use App\Models\MakeAnAppointment;

Route::get('/', function () {
    // return Inertia::render('welcome');
    return view('desgin.login');
})->name('home');

// Route::middleware(['auth', 'verified'])->group(function () {
//     Route::get('dashboard', function () {
//         return Inertia::render('dashboard');
//     })->name('dashboard');
// });

Route::get('sign', [CRUDController::class, 'Sign'])->name('Sign');
Route::post('sign', [CRUDController::class, 'postSign'])->name('post.Sign');

Route::get('login', [CRUDController::class, 'Login'])->name('Login');
Route::post('login', [CRUDController::class, 'authUser'])->name('user.authUser');

Route::get('admin', [ProductController::class, 'index'])->name('Demo');

//index home
Route::get('index', [CRUDController::class, 'IndexHome'])->name('indexHome');

//index products list
Route::get('index', [ProductController::class, 'listProducts'])->name('indexHome');


//Make_appointment
Route::get('make _appointment', [CRUDController::class, 'Make_appointment'])->name('appointment');

//evalues
Route::get('Evalues', [CRUDController::class, 'Evalutes'])->name('evalues');
Route::post('Evalues', [EvaluteController::class, 'createEvalutes'])->name('createEvalutes');


Route::get('forgetPassword', [CRUDController::class, 'ForgetPassword'])->name('forgetPassword.sign');
Route::post('forgetPassword', [CRUDController::class, 'postUpdatePassword'])->name('user.postUpdatePassword');




Route::get('QL_Users', [CRUDController::class, 'QL_User'])->name('users');

// Route::get('edit_user', [CRUDController::class, 'updateUser'])->name('users');

Route::get('QL_Users', [CRUDController::class, 'index'])->name('users');


Route::post('edit_user', [CRUDController::class, 'User_list'])->name('edit');
Route::get('edit_user', [CRUDController::class, 'updateUser'])->name('edit');

Route::post('edit_user', [CRUDController::class, 'postUpdateUser'])->name('user.postUpdateUser');


Route::get('add_user', [CRUDController::class, 'Add'])->name('add_user');
Route::post('add_user', [CRUDController::class, 'addUsers'])->name('user.addUsers');
Route::get('delete_user', [CRUDController::class, 'deleteUser'])->name('user.delete');


//make apponitment

Route::post('make _appointment', [MakeAnAppointmentController::class, 'store'])->name('make.appointment');

//chatbox
// Route::post('/chat-ai', [\App\Http\Controllers\ChatController::class, 'chat']);





// require __DIR__.'/settings.php';
// require __DIR__.'/auth.php';
