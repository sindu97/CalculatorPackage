<?php
Route::get('calc', function () {
    echo "form the route";
});

Route::get('add/{a}/{b}', [LP\Calculator\CalculatorController::class, 'add']);
Route::get('subtract/{a}/{b}', [LP\Calculator\CalculatorController::class, 'subtract']);


?>