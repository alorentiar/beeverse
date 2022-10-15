<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use RealRashid\SweetAlert\Facades\Alert;

class LocaleController extends Controller
{
    //

    public function changeLocaleEN($locale='en')
    {
        $localization = session()->put('locale', $locale);
        App::setlocale($localization);

        Alert::success('Success change language','Sukses ganti bahasa');
        return redirect()->back();
    }

    public function changeLocaleID($locale='en')
    {
        $localization = session()->put('locale', $locale);
        App::setlocale($localization);

        Alert::success('Success change language','Sukses ganti bahasa');
        return redirect()->back();
    }
}
