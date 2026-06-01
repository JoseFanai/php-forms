<?php

// use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $ideas = session()->get('ideas', []);

    return view('ideas', [
        'ideas' => $ideas
    ]);
});

// Route::post('/ideas', function () {
//     // dd('Hello!');
//     dd(request()->all());
// });
Route::post('/ideas', function () {
    // $ideas = Request::input('ideas');
    // Do something with the submitted ideas, e.g., save to database
    $idea = request('idea');
    session()->push('ideas', $idea);

    return redirect('/');
});

// temporary
Route::get('/delete-ideas', function () {
    session()->forget('ideas');
    return redirect('/');
});
