<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about.index',["Name" => "Anish" ]);
});

Route::get('/teas', function () {
    $teas = [
           ["Name"=>"milk chai" , "price"=>30, "id" => 1],
           ["Name"=>"best chai" , "price"=>50, "id" => 2],
           ["Name"=>"babal chai" , "price"=>80, "id" => 3],
             
        ];
    return view('teas.teas', ['teas' => $teas]);
});


Route::get('/teas/{id}', function ($id) {
    $teas = [
           ["Name"=>"milk chai" , "price"=>30, "id" => 1],
           ["Name"=>"best chai" , "price"=>50, "id" => 2],
           ["Name"=>"babal chai" , "price"=>80, "id" => 3],
             
        ];
    return view('teas.details ', ['tea' => $teas[$id - 1]]);
});

