<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class LanguageController extends Controller
{
    public function change($language) {
    	Session::put('locale', $language);

    	return redirect()->back();
    }
}
