<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LangController extends Controller
{
    private $langActive = [
        'vi',
        'en',
    ];
    public function changeLocale(Request $request, $locale)
    {
        Session::put('locale', $locale);
        
        return back();
    }
}
