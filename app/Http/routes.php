<?php

get('/', function () {
    return redirect('/user');
});


resource('user', 'UsersController');


Route::post('queue/ht-feevale', function()
{
    return Queue::marshal();
});
