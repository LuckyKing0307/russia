<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\SurveyCompletedMiddleware;


Route::middleware([SurveyCompletedMiddleware::class])->group(function () {
    Route::get('/', [\App\Http\Controllers\IndexController::class, 'index'])->name('message.index');
    Route::post('/request', [\App\Http\Controllers\IndexController::class, 'send'])->name('user.reg');
});

Route::get('/survey-end', function () {
    return view('survey_end');
});
