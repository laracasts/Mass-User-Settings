<?php

Route::get('/', function () {
    // settings('foo');
    // settings()->get('foo');
    // settings()->set('fizz', 'buzz');
    // settings()->merge(['new' => 'stuff']);
    // settings()->foo;
    // settings()->has('foo');
    // settings()->all();

    return 'See your routes file.';
});

// HOMEWORK;
// Update your Settings class to allow for the setting of properties, like so:
//
// settings('foo', 'bar')
//
// If two arguments are provided, we are setting a value. If one is provided,
// we are getting a value. If none are provided, we get the Settings object.
