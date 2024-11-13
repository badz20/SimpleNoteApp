<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\RemarkController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::group(['prefix' => 'note'], function () {
        Route::get('/', [NoteController::class, 'index'])->name('note.index');
        Route::post('/store', [NoteController::class, 'store'])->name('note.create');
        Route::get('/add-note', [NoteController::class, 'create'])->name('note.add');
        Route::get('/edit-note/{id}', [NoteController::class, 'edit'])->name('note.edit');
        Route::put('/edit/{id}', [NoteController::class, 'update'])->name('note.update');
        Route::delete('/delete/{id}', [NoteController::class, 'destroy'])->name('note.delete');
        Route::post('/{id}/remarks/store', [RemarkController::class, 'store'])->name('remark.store');

    });
});

require __DIR__.'/auth.php';


