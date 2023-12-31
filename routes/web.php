<?php

use App\Http\Controllers\Frontend\Companies\CompanyController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuperController;
use App\Http\Controllers\Frontend\Sponsore\SponsoreController;
use App\Http\Controllers\Frontend\Employees\EmployerController;
use App\Http\Controllers\Frontend\PaymentController;
use App\Http\Controllers\Frontend\PaymentNotificationsController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('user.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
require __DIR__.'/admin.php';


Route::middleware(['auth','role:super'])->group(function () {
    Route::get('/super/dashboard', [SuperController::class, 'SuperDashboard'])->name('super.dashboard');
});

//only views

//companies
// Route::get('/dashboard/companies', function () {
//     return view('user.companies.index');
// })->middleware(['auth', 'verified'])->name('companies');
// Route::get('/dashboard/companies/show', function () {
//     return view('user.companies.show');
// })->middleware(['auth', 'verified'])->name('companies.show');

//company files
Route::get('/dashboard/company/files/create', function () {
    return view('user.company-files.create');
})->middleware(['auth', 'verified'])->name('company-files.create');
Route::get('/dashboard/company/files/edit', function () {
    return view('user.company-files.edit');
})->middleware(['auth', 'verified'])->name('company-files.edit');
Route::get('/dashboard/company/files/renew', function () {
    return view('user.company-files.renew');
})->middleware(['auth', 'verified'])->name('company-files.renew');
Route::get('/dashboard/company/files/show', function () {
    return view('user.company-files.show');
})->middleware(['auth', 'verified'])->name('company-files.show');


//employee
// Route::get('/dashboard/employee', function () {
//     return view('user.employee.index');
// })->middleware(['auth', 'verified'])->name('employee');
// Route::get('/dashboard/employee/show', function () {
//     return view('user.employee.show');
// })->middleware(['auth', 'verified'])->name('employee.show');
// Route::get('/dashboard/employee/create', function () {
//     return view('user.employee.create');
// })->middleware(['auth', 'verified'])->name('employee.create');
// Route::get('/dashboard/employee/edit', function () {
//     return view('user.employee.edit');
// })->middleware(['auth', 'verified'])->name('employee.edit');

//employee files
Route::get('/dashboard/employee/files/create', function () {
    return view('user.employee-files.create');
})->middleware(['auth', 'verified'])->name('employee-files.create');
Route::get('/dashboard/employee/files/edit', function () {
    return view('user.employee-files.edit');
})->middleware(['auth', 'verified'])->name('employee-files.edit');
Route::get('/dashboard/employee/files/renew', function () {
    return view('user.employee-files.renew');
})->middleware(['auth', 'verified'])->name('employee-files.renew');
Route::get('/dashboard/employee/files/show', function () {
    return view('user.employee-files.show');
})->middleware(['auth', 'verified'])->name('employee-files.show');

//sponsored
// Route::get('/dashboard/sponsored', function () {
//     return view('user.sponsored.index');
// })->middleware(['auth', 'verified'])->name('sponsored');
// Route::get('/dashboard/sponsored/show', function () {
//     return view('user.sponsored.show');
// })->middleware(['auth', 'verified'])->name('sponsored.show');
// Route::get('/dashboard/sponsored/create', function () {
//     return view('user.sponsored.create');
// })->middleware(['auth', 'verified'])->name('sponsored.create');
// Route::get('/dashboard/sponsored/edit', function () {
//     return view('user.sponsored.edit');
// })->middleware(['auth', 'verified'])->name('sponsored.edit');

//sponsored files
Route::get('/dashboard/sponsored/files/create', function () {
    return view('user.sponsored-files.create');
})->middleware(['auth', 'verified'])->name('sponsored-files.create');
Route::get('/dashboard/sponsored/files/edit', function () {
    return view('user.sponsored-files.edit');
})->middleware(['auth', 'verified'])->name('sponsored-files.edit');
Route::get('/dashboard/sponsored/files/renew', function () {
    return view('user.sponsored-files.renew');
})->middleware(['auth', 'verified'])->name('sponsored-files.renew');
Route::get('/dashboard/sponsored/files/show', function () {
    return view('user.sponsored-files.show');
})->middleware(['auth', 'verified'])->name('sponsored-files.show');





Route::group(['prefix'=> LaravelLocalization::setLocale()],function(){

//sponsored controller
Route::resource('dashboard/sponsore',SponsoreController::class)->middleware(['auth', 'verified']);

//employees
Route::resource('dashboard/employee',EmployerController::class )->middleware(['auth', 'verified']);

//companies
Route::resource('dashboard/companies', CompanyController::class);


// Payment
Route::get('dashboard/payment', [PaymentController::class, 'index'])->name('checkout');
Route::post('/session',  [PaymentController::class, 'session'])->name('session');
Route::get('/success', [PaymentController::class, 'success'])->name('success');


// notifications

Route::post('/mark-notifications-as-read', [PaymentNotificationsController::class, 'markAsRead'])->name('mark-notifications-as-read');



}) ;
