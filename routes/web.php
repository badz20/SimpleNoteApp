<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [NoteController::class, 'index'])->name('note.index');

Route::group(['prefix' => 'note'], function () {
    Route::post('/store', [NoteController::class, 'store'])->name('note.create');
    Route::put('/edit/{id}', [NoteController::class, 'update'])->name('note.edit');
    Route::delete('/delete/{id}', [NoteController::class, 'destroy'])->name('note.delete');
});

