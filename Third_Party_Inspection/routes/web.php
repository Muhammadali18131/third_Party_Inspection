<?php

use App\Http\Controllers\CandidateController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

/*
|--------------------------------------------------------------------------
| Admin
|--------------------------------------------------------------------------
*/


Route::middleware('auth')->group(function () {
    Route::get('admin', function () {
        return view('admin.index');
    })->name("admin");


    // ------ Candidates ------
    Route::get("candidate/add", [CandidateController::class, 'create'])->name("candidate-create");
    Route::post("candidate/add", [CandidateController::class, 'store'])->name("candidate-store");
    Route::get("candidate", [CandidateController::class, 'index'])->name("candidate");
    Route::get("candidate/edit/{id}", [CandidateController::class, 'edit'])->name("candidate-edit");
    Route::put("candidate/edit/{id}", [CandidateController::class, 'update'])->name("candidate-update");
    Route::get("candidate/delete/{id}", [CandidateController::class, 'delete'])->name("candidate-delete");
    Route::delete("candidate/delete/{id}", [CandidateController::class, 'destroy'])->name("candidate-destroy");
});




Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
