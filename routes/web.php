<?php

use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;



Route::view('/','index')->name('index');

Route::view('register','register')->name('register');

Route::view('login','login')->name('login');

Route::view('admin-Dashboard','adminDashboard')->name('admin.dashboard');

Route::view('add-dept-info','deptInfo')->name('add.info');





Route::controller(UserController::class)->group(function(){
    Route::post('saveUser','saveUser')->name('saveUser');

    Route::post('loginMatch','loginMatch')->name('loginMatch');

    Route::get('user-dashboard','dashboardPage')->name('user.dashboard');

    Route::get('logout','logout')->name('logout');

    Route::get('dept_info','showUsers')->name('showUsers');
});



Route::controller(DepartmentController::class)->group(function(){
    Route::post('dashboard','addDeptInfo')->name('save.dept');

    Route::get('all-info','showDepartment')->name('all.info');

    Route::get('visiting/{id}','saveVisit')->name('saveVisit');

    //Route::get('show','showVisit')->name('show');
    Route::get('pending-request','showVisit')->name('user.pending');

    Route::get('admin-pending','adminPending')->name('admin.pending');

    Route::get('request-update/{id}','updateData')->name('update.pending');

    Route::post('update-request/{id}','updateRequest')->name('update.request');

    Route::get('pdf-download/{id}','downloadPDF')->name('download.pdf');

  


});