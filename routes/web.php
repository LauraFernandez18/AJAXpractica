<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

/*mostrar*/

Route::get("/first", [TestController::class,'first']);

Route::get("/mostrar", [TestController::class,'mostrar']);

Route::delete('/eliminar/{id}', [PersonaController::class, 'eliminar']);