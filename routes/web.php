<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\teacherController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\studentController;

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
Route::any('/signup', [teacherController::class, 'signup']);
Route::any('/submitsignup', [teacherController::class, 'submitsignup']);

Route::any('/', [teacherController::class, 'login']);
Route::any('/submitlogin', [teacherController::class, 'submitlogin']);
Route::any('/profile', [adminController::class, 'profile']);
Route::any('/submitprofile', [adminController::class, 'submitprofile']);
Route::any('/oceanresultdetails', [adminController::class, 'oceanresultdetails']);

Route::any('/addstudent', [teacherController::class, 'addstudent']);
Route::any('/submitaddstudent', [teacherController::class, 'submitaddstudent']);
Route::any('/studentlist', [teacherController::class, 'studentlist']);
Route::any('/editstudent/{id}', [teacherController::class, 'editstudent']);
Route::any('/submiteditstudent', [teacherController::class, 'submiteditstudent']);
Route::any('/deletestudent/{id}', [teacherController::class, 'deletestudent']);

Route::any('/testlist', [teacherController::class, 'testlist']);
Route::any('/createtest', [teacherController::class, 'createtest']);
Route::any('/submittest', [teacherController::class, 'submittest']);
Route::any('/deletetest/{id}', [teacherController::class, 'deletetest']);
Route::any('/viewtest/{id}', [teacherController::class, 'viewtest']);
Route::any('/showresult/{id}', [teacherController::class, 'showresult']);

Route::any('/submittestadmin', [adminController::class, 'submittestadmin']);
Route::any('/admindashboard', [adminController::class, 'admindashboard']);
Route::any('/userlist', [adminController::class, 'userlist']);
Route::any('/adduser', [adminController::class, 'adduser']);
Route::any('/submitadduser', [adminController::class, 'submitadduser']);
Route::any('/edituser/{id}', [adminController::class, 'edituser']);
Route::any('/submitedituser', [adminController::class, 'submitedituser']);
Route::any('/deleteuser/{id}', [adminController::class, 'deleteuser']);
Route::any('/personalitydatabase', [adminController::class, 'personalitydatabase']);
Route::any('/teacherstats', [adminController::class, 'teacherstats']);
Route::any('/testquestions', [adminController::class, 'testquestions']);
Route::any('/quizlist', [adminController::class, 'quizlist']);
Route::any('/createquiz', [adminController::class, 'createquiz']);
Route::any('/addmoretoquiz/{id}', [adminController::class, 'addmoretoquiz']);
Route::any('/submitquiz', [adminController::class, 'submitquiz']);
Route::any('/userstatistics', [adminController::class, 'userstatistics']);
Route::any('/statistics', [adminController::class, 'statistics']);
Route::any('/quizdetails/{id}', [adminController::class, 'quizdetails']);
Route::any('/studenttestlist', [studentController::class, 'studenttestlist']);
Route::any('/testnote/{testid}', [studentController::class, 'testnote']);
Route::any('/startstudenttest/{testid}', [studentController::class, 'startstudenttest']);
Route::any('/submitstudenttest', [studentController::class, 'submitstudenttest']);
Route::any('/lock', [studentController::class, 'lock']);
Route::any('/studentquiz', [studentController::class, 'studentquiz']);
Route::any('/finishtest', [studentController::class, 'finishtest']);
Route::any('/showresultdetails/{id}', [teacherController::class, 'showresultdetails']);
Route::any('/studenttestshare/{test}/{tescher}', [studentController::class, 'studenttestshare']);
Route::any('/studenttestsharesignup/{test}/{tescher}', [studentController::class, 'studenttestsharesignup']);
Route::any('/showstudentresult/{id}', [adminController::class, 'showstudentresult']);

Route::get('/quizmanage/viewquiz/1', function () {
    return view('admin.viewquiz');
});
Route::get('/quiz', function () {
    return view('teacher.quiz');
});
Route::get('/testview', function () {
    return view('teacher.testview');
});

Route::get('/result', function () {
    return view('student.result');
});
Route::get('/oceanresultdetails', function () {
    return view('student.oceanresultdetails');
});
Route::get('/Conscientiousnessdetails', function () {
    return view('student.Conscientiousnessdetails');
});
Route::get('/Extroversiondetails', function () {
    return view('student.Extroversiondetails');
});
Route::get('/Agreeablenessdetails', function () {
    return view('student.Agreeablenessdetails');
});
Route::get('/Neuroticismdetails', function () {
    return view('student.Neuroticismdetails');
});
Route::get('/selfesteemdetails', function () {
    return view('student.selfesteemdetails');
});
Route::get('/personalityandquizmanager', function () {
    return view('admin.personalityandquizmanager');
});