<?php

namespace App\Http\Controllers;

use Brackets\Translatable\Facades\Translatable;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    /**
     * @param $lang
     * @return RedirectResponse
     */
    public function switchLang($lang): RedirectResponse
    {
        $locales = Translatable::getLocales()->toArray();
        if (in_array($lang, $locales)) {
            Session::put('app.locale', $lang);
            app()->setLocale($lang);
        }
        return Redirect::back();
    }
}
