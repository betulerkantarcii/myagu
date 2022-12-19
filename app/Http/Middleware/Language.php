<?php

namespace App\Http\Middleware;

use Brackets\Translatable\Facades\Translatable;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

class Language
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     * @return mixed
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function handle(Request $request, Closure $next)
    {
        $locales = Translatable::getLocales()->toArray();
        if (Session()->has('app.locale') AND in_array($request->Session()->get('app.locale'), $locales)) {
            App::setLocale(Session()->get('app.locale'));
        }
        else { // This is optional as Laravel will automatically set the fallback language if there is none specified
            App::setLocale(config('app.fallback_locale'));
        }

        return $next($request);
    }
}
