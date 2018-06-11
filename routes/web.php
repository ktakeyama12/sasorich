<?php

Route::get('/', function () {
    return view('welcome', ['posts' => App\Post::all(), 'tags' => App\Tag::all()]);
});

Route::post('/', function () {
    $post = new App\Post();
    $post->body = request()->body;
    $post->save();
    $post->tags()->attach(request()->tags);
    return redirect('/');
});