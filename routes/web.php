<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Illuminate\Support\Arr;
use App\Models\Job;

Route::get('/users', [UserController::class, 'index'])->name('users.index');

Route::get('/', function () {
    return view('home');
});

Route::get("/contact",function(){
    return view('contact');
});

Route::get("/jobs",function(){
    return view('jobs',[
        'jobs' =>Job::all()
        ]);
});

Route::get("/job/{id}",function($id){
        $jobs = [
            [
                'id' => 1,
                'title' => 'Director',
                'salary' => '$50,000'
            ],
            [
                'id' => 2,
                'title' => 'Programmer',
                'salary' => '$10,000'
            ],
            [
                'id' => 3,
                'title' => 'Teacher',
                'salary' => '$40,000'
            ]
            ];
        $job=Job::find($id);
    return view('job',['job'=>$job]);
});