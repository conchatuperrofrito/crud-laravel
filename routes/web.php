<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;

//funcion de gobierno
Route::get('/note', [NoteController::class, 'index'])->name('note.index');
Route::get('/note/create', [NoteController::class, 'create'])->name('note.create');
//resepcion de informacion de forma encriptadaR
Route::post('/note/store', [NoteController::class, 'store'])->name('note.store');
// nsesitamos saver que dato actulizara con parametros dinamicos 
Route::get('/note/edit/{note}', [NoteController::class, 'edit'])->name('note.edit');
// modificacion put 
Route::put('/note/update/{note}', [NoteController::class, 'update'])->name('note.update');
Route::get('/note/show/{note}', [NoteController::class, 'show'])->name('note.show');
Route::delete('/note/destroy/{note}', [NoteController::class, 'destroy'])->name('note.destroy');