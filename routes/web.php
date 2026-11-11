<?php

use App\Http\Controllers\Admin\ProjectController;
use App\Models\Project;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $projects = Project::latest()->get();
    // $projects = [
    //     ['title' => 'Web Development', 'description' => 'Modern and responsive website development.'],
    //     ['title' => 'UI/UX Design', 'description' => 'Beautiful and user-friendly interface designs.'],
    //     ['title' => 'Software Solutions', 'description' => 'Custom software solutions for your business.'],
    //     ['title' => 'Marketing Solutions', 'description' => 'Custom Product Promotional solutions for your business.'],
    // ];

    $myName = ['name' => 'Akil Injamam'];

    return view('home', $myName, ['projects' => $projects]);
});

Route::get('/about', function () {
    return view('about');
});

Route::resource('admin/projects', ProjectController::class)->except(['show']);
