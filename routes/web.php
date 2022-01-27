<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

/*mostrar*/

Route::get("/mostrar", [TestController::class,'mostrar']);

Route::delete('/eliminarPersona/{id}', [PersonaController::class, 'eliminarPersona']);