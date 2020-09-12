<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LangController extends Controller
{
    private $localeActive = [
        'vi',
        'en',
    ];
    public function changeLocale(Request $request, $locale)
    {
        if(in_array($locale, $this->localeActive)){
            Session::put('locale', $locale);
        
            return back();
        }
    }
}
