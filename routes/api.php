<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::controller(\App\Http\Controllers\ToolsController::class)
    ->group(function () {
        Route::get('palindrome/{string}', 'palindrome');
        Route::get('string-frequency/{string}', 'stringFrequency');
    });

Route::fallback(fn() => response()->json([
    'message' => "Oops... It seems you've got the wrong place"
]));
