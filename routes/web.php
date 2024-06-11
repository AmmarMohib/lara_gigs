<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Models\Listing;

Route::get('/', function () {
    return view('listings', [
        'heading' => 'Latest Listings',
        'listings' => Listing::All()
        
    ]);
});

Route::get('/hello', function () {
    return response('<h1>hello World</h1>', 200) 
    -> header('Content-Type', 'text/plain')
    -> header('foo', 'bar');
});

Route::get('/posts/{id}', function ($id) {
    ddd($id);
    return response('Post' . $id);
}) -> where('id' , '[0-9]+');

// Route::get('/search/', function (Request $request) {
//     return response($request->name);
// //     return response('Post' . $id);
// });

Route::get('/posts', function() { 
    return response()->json([
        'posts' => [
                'title' => 'Post One'
            ]             
        ]);       
    });