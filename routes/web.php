<?php

use App\Http\Controllers\StudentController;
use App\Models\Student;
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
    return view('welcome');
    //return view('mywelcome');
});

/*
Route::get('/students', function () {
    $students = Student::all();
    print_r($students);
    foreach ($students as $student) {
        echo $student->name . '<br>';
    }
});

Route::get('students/{id}', function ($id) {
    $student = Student::find($id);
    echo $student;
});

Route::get('studentsgirl', function () {
    $girlStudent = Student::where('gender', 0)->get();
    foreach ($girlStudent as $student) {
        echo $student->name . '<br>';
    }
});

Route::get('/addstudent', function () {
    $student = new Student;
    $student->name = "Gipsz Jakab";
    $student->email= "gipsz@gmail.com";
    $student->gender = 1;
    $student->save();
});

Route::get('/deletestudent/{id}', function ($id) {
    $stud = Student::find($id);
    $stud->delete();
});

*/

Route::get('students', [StudentController::class, 'index'])->name('students.index');
Route::get('students/create', [StudentController::class, 'create'])->name('students.create');
Route::post('/students/store', [StudentController::class, 'store'])->name('students.store');
Route::get('students/{student}', [StudentController::class, 'show']);
Route::get('students/edit/{student}',[StudentController::class, 'edit'])->name('students.edit');
Route::post('students/edit/{student}',[StudentController::class, 'update'])->name('students.update');
Route::delete('/students/{student}', [StudentController::class, 'destroy'])->name('students.destroy');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/proba1', function(){

    $students = App\Models\Program::find(1)->students;
    foreach ($students as $stud) {
        echo $stud->name. '<br>';
    }

    $student = App\Models\Student::find(1);
    echo $student->program->name;

});

Route::get('/proba2', function(){

    // Egy hallgató kurzusai
    $student = App\Models\Student::find(1);
    $courses = $student->courses;
    foreach ($courses as $course) {
        echo $course->name. '<br>';
    }

    // Egy kurzus hallgatói
    $course = App\Models\Course::find(1);
    $students = $course->students;
    foreach ($students as $stud) {
        echo $stud->name. '<br>';
    }

});

Route::get('people/{name}/{surname?}', function ($name, $surname) {

    return 'Hello ' . $name . ' ' . $surname;

});
