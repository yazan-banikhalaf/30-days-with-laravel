<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    
    return view('home');

});

Route::get('/jobs', function () {
    $job = Job::with('employer')->latest()->cursorPaginate(3);
    return view('jobs/index', ['jobs' => $job]);
});

route::get('/jobs/create', function () {
    return view('jobs/create');
});

Route::get('/jobs/{id}', function ($id) {

    $job = Job::find($id);

    return view('jobs/show' , ['job' => $job]);
});

route::post('/jobs' , function() {
    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => 1
    ]);

    return redirect('/jobs');
});
Route::get('/contact', function () {

    return view('contact');

});
