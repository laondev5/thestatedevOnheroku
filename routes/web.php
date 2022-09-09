<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FallBackController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\MobileController;
use App\Http\Controllers\PcController;
use App\Http\Controllers\SpaceController;
use App\Http\Controllers\SubscribController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TeamModelController;
use App\Http\Controllers\VisitorController;
use App\Http\Controllers\WebController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


// Visitors

Route::get('/', [VisitorController::class, 'index'])->name('home');

Route::get('/about', [AboutController::class, 'index'])->name('about');

Route::get('/mobile', [MobileController::class, 'index'])->name('mobile');

Route::get('/web', [WebController::class, 'index'])->name('web');

Route::get('/pc', [PcController::class, 'index'])->name('pc');

Route::get('/space', [SpaceController::class, 'index'])->name('space');

Route::post('/contact', [ContactController::class, 'store'])->name('contact');

Route::post('/subscrib', [SubscribController::class, 'store'])->name('subscrib');

// End of Visitor
  

// Admin controller
Route::get('/admin', [AdminController::class, 'index'])->name('admin');

Route::get('/subscrib', [AdminController::class, 'subscrib'])->name('admin.subscrib');

Route::get('/contact', [AdminController::class, 'contact'])->name('admin.contact');

Route::get('/create', [AdminController::class, 'create'])->name('admin.create');

Route::post('/create', [AdminController::class, 'store'])->name('admin.store');

Route::post('/team', [TeamModelController::class, 'store'])->name('storeTeam');

Route::get('createTeam', [TeamModelController::class, 'create'])->name('admin.team');

Route::get('/createFaq', [FaqController::class, 'create'])->name('admin.createFaq');

Route::post('/storeFaq', [FaqController::class, 'store'])->name('admin.storeFaq');


// end of admin controller


// fallback

Route::get(FallBackController::class);

// end of fallback

