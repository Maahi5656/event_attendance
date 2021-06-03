<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QRController;

use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\UserMiddleware;

use App\Models\Employee;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('layouts.dashboard_page');
});

Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('admin');

//User
Route::get('/add-new-employee', [App\Http\Controllers\EmployeeController::class, 'index']);
Route::post('/insert-employee', [App\Http\Controllers\EmployeeController::class, 'insert'])->name('insert.employee');
Route::get('/edit-employee/{id}', [App\Http\Controllers\EmployeeController::class, 'edit']);
Route::post('/employee-update', [App\Http\Controllers\EmployeeController::class, 'update'])->name('update.employee');
Route::get('/delete-employee/{id}', [App\Http\Controllers\EmployeeController::class, 'delete']);
Route::get('/view-all-employee', [App\Http\Controllers\EmployeeController::class, 'details']);

// Profile Controller
Route::get('/edit-profile/{id}', [ProfileController::class, 'editProfile']);
Route::post('/profile-update', [App\Http\Controllers\ProfileController::class, 'updateProfile'])->name('update.profile');
//Register
Route::get('/employee-registration', [App\Http\Controllers\RegistrationController::class, 'registerPage']);

//QR Code
Route::get('/new-qr', [QRController::class, 'QRPage']);
Route::post('/new-qr/store', [QRController::class, 'store'])->name('qrcode.store');
Route::get('/qr-history', [QRController::class, 'details'])->name('qrcode.list');

//User Dashboard
Route::get('user/dashboard', [App\Http\Controllers\EmployeeController::class, 'userDashboard'])->middleware('user');
Route::get('user-report-list', [App\Http\Controllers\EmployeeController::class, 'userRegisterList']);
// Route::get('edit-user-profile/{id}', [App\Http\Controllers\EmployeeController::class, 'userRegisterList']);


Route::get('qrcode', function () {
    return QrCode::size(300)->generate('A basic example of QR code!');
});
