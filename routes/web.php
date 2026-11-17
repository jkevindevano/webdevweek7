<?php
use App\Http\Controllers\CourseController;
use App\Http\Controllers\LecturerController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Models\Course;
use App\Models\Project;
use App\Models\Lecturer;
use Illuminate\Support\Facades\Route;

Route::get('/home', [HomeController::class, 'index']);

Route::get('/project', [ProgramController::class, 'getallproject']);

Route::get('/course', [CourseController::class, 'index']); 

Route::get('/lecturer', [LecturerController::class,'index']);
Route::get('/create-lecturer', [LecturerController::class, 'create'])->name('lecturers.create');
Route::post('/lecturer',[LecturerController::class, 'store'])->name('lecturers.store');
Route::get('/editlecturer/{lecturer}', [LecturerController::class, 'edit'])->name('lecturers.edit');
Route::put('/editlecturer/{lecturer}', [LecturerController::class, 'update'])->name('lecturers.update');
Route::delete('/destroybook/{lecturer}', [LecturerController::class, 'destroy'])->name('lecturers.destroy');
Route::get('/contact', [ContactController::class,'show'] );
    

