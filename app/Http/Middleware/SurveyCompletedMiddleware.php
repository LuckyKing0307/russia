<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class SurveyCompletedMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */

    public function handle(Request $request, Closure $next)
    {
        // Проверяем, есть ли отметка о пройденном опросе в сессии
        if (Session::get('survey_completed')) {
            return redirect('/survey-end'); // Перенаправляем на конечную страницу
        }

        return $next($request);
    }
}
