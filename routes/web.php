<?php

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

Route::get('/', function () {
    return view('Index.login');
});

Auth::routes();

Route::get('/index', function () {
    return view('Index.index');
});

Route::get('/student', function () {
    return view('Student.student');
});

Route::any('/student_list', [App\Http\Controllers\StudentController::class, 'liststudent']);


Route::get('/add_student', function () {
    return view('Student.add_student');
});

Route::any('/add_studentaction', [App\Http\Controllers\StudentController::class, 'addStudent']);

Route::get('/add_faculty', function () {
    return view('Faculty.add_faculty');
});

Route::get('/modify_faculty', function () {
    return view('Faculty.modify_faculty');
});



Route::any('/modify_student/{enroll}', [App\Http\Controllers\StudentController::class, 'modifyStudent']); //css not appearing
/*Route::any('/modify_student', [App\Http\Controllers\HomeController::class, 'modifyStudent']);*///Particular for button

Route::any('/modify_studentaction', [App\Http\Controllers\StudentController::class, 'modifyStudentaction']);

Route::get('/modify_faculty/{id}', [App\Http\Controllers\FacultyController::class, 'modifyFaculty']); //css not appearing
/*Route::any('/modify_faculty', [App\Http\Controllers\HomeController::class, 'modifyFaculty']);*///Particular for button

Route::any('/modify_facultyaction', [App\Http\Controllers\FacultyController::class, 'modifyFacultyaction']);


Route::any('/remove_faculty/{id}', [App\Http\Controllers\FacultyController::class, 'removefaculty']);


Route::any('/remove_student/{enrol}', [App\Http\Controllers\StudentController::class, 'removeStudent']);


Route::any('/faculty', [App\Http\Controllers\FacultyController::class, 'listfaculty']);

Route::any('/add_facultyaction', [App\Http\Controllers\FacultyController::class, 'addfaculty']);

/*Route::get('/timetable', function () {
    return view('Table.timetable');
});*/

Route::any('/timetableaction', [App\Http\Controllers\TimetableController::class, 'feedTimetable']);

Route::any('/log', [App\Http\Controllers\LogController::class, 'temp']);

Route::any('/A_division', [App\Http\Controllers\TimetableController::class, 'listTimetable_a']);
Route::any('/B_division', [App\Http\Controllers\TimetableController::class, 'listTimetable_b']);
Route::any('/C_division', [App\Http\Controllers\TimetableController::class, 'listTimetable_c']);
Route::any('/C_lab', [App\Http\Controllers\TimetableController::class, 'listTimetable_lab_c']);

Route::any('/Admin_profile', [App\Http\Controllers\AdminController::class, 'admin_data']);

Route::any('/logout', [App\Http\Controllers\AdminController::class, 'logout']);

Route::get('/login', function () {
    return view('Index.login');
});

Route::get('/add_admin', function () {
    return view('Admin.add_admin');
});

Route::any('/add_adminaction', [App\Http\Controllers\AdminController::class, 'add_adminaction']);

Route::any('/remove_admin/{id}', [App\Http\Controllers\AdminController::class, 'remove_admin']);

Route::any('/modify_admin/{id}', [App\Http\Controllers\AdminController::class, 'modify_admin']);

Route::any('/modifyadminaction', [App\Http\Controllers\AdminController::class, 'modifyadminaction']);
