<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    
    return view('home');

});

//Index
Route::get('/jobs', function () {
    $job = Job::with('employer')->latest()->cursorPaginate(3);
    return view('jobs/index', ['jobs' => $job]);
});

//Create
route::get('/jobs/create', function () {
    return view('jobs/create');
});

//Show
Route::get('/jobs/{id}', function ($id) {

    $job = Job::find($id);

    return view('jobs/show' , ['job' => $job]);
});

//Edit Page
Route::get('/jobs/{id}/edit', function ($id) {

    $job = Job::find($id);

    return view('jobs/edit' , ['job' => $job]);
});

//Store
route::post('/jobs' , function() {
    request()->validate([
        'title' => ['required' , 'min:3'],
        'salary' => ['required'],
    ]);
    
    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => 1
    ]);

    return redirect('/jobs');
});

//Update
Route::patch ('/jobs/{id}', function ($id) {
    request()->validate([
        'title' => ['required' , 'min:3'],
        'salary' => ['required'],
    ]);

    $job = Job::findOrFail($id);

    $job->update([
        'title' => request('title'),
        'salary' => request('salary')
    ]);

    return redirect('/jobs/' . $job->id);
});

//Destroy
Route::delete('/jobs/{id}', function ($id) {
    $job = Job::findOrFail($id);

    $job->delete();

    return redirect('/jobs');
});

Route::get('/contact', function () {

    return view('contact');

});
