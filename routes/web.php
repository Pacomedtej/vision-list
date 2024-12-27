<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('new', function(){
    return view('create');
});

Route::get('/view/{id}', function($id){
    return "You're viewing Note $id";
});