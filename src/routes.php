<?php

Route::get('calculator', function(){
    echo "Hello from THE OTHER SIDE";
});

Route::get('add/{a}/{b}','Emdojo\Calculator\CalculatorController@add');
Route::get('subtract/{a}/{b}','Emdojo\Calculator\CalculatorController@subtract');

?>