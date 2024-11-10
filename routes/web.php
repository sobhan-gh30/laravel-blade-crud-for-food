<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FoodsController ;

Route::resource('/foods', FoodsController::class);



require __DIR__.'/auth.php';
