<?php

use App\Http\Controllers\NoteControler;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/note')->name('dashboard');

Route::middleware(["auth", "verified"])->group(function () {
    // Route::get('/note', [NoteControler::class, 'index'])->name('note.index');
    // Route::get('/note/create', [NoteControler::class, 'create'])->name('note.create');
    // Route::post('/note', [NoteControler::class, 'store'])->name('note.store');
    // Route::get('/note/{id}', [NoteControler::class, 'show'])->name('note.show');
    // Route::get('/note/{id}/edit', [NoteControler::class, 'edit'])->name('note.edit');
    // Route::put('/note/{id}', [NoteControler::class, 'update'])->name('note.update');
    // Route::delete('/note/{id}', [NoteControler::class, 'destroy'])->name('note.destroy');

    Route::resource('note', NoteControler::class);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
