<?php

get('/', function () {
    return redirect('/user');
});

Route::resource('user', 'UsersController');


Route::post('queue/ht-feevale', function()
{
    return Queue::marshal();
});