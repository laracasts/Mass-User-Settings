<?php

Route::get('/', function () {
    return App\User::first();
});

Route::get('settings', function() {
    App\User::first()->settings()->merge(Request::all());

    return redirect('/');
});