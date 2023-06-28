<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class GeoDataMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $mainCity = array(
            "Moscow" => "Москва",
            "Rostov-on-Don" => "Ростов-на-Дону",
            "Yekaterinburg" => "Екатеринбург",
            "Krasnodar" => "Краснодар",
            "Samara" => "Самара",
            "Saint Petersburg" => "Санкт-Петербург",
            "Ufa" => "Уфа",
            "Chelyabinsk" => "Челябинск"
        );
        // получение других городов для заказа
        $path = public_path('src/json/russia.json');
        $data = file_get_contents($path);
        $otherCity = json_decode($data, true);

        // Передаем переменные в представления
        view()->share('mainCity', $mainCity);
        view()->share('otherCity', $otherCity);

        return $next($request);
    }
}
