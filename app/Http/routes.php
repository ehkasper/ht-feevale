<?php

get('/', function () {
    return redirect('/user');
});

Route::resource('user', 'UsersController');
