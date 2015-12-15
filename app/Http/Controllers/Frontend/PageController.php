<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function aboutUs() {
        return view('frontend.about_us');
    }

    public function contactUs() {
        return view('frontend.contact_us');
    }

    public function creditCalculation() {
    	return view('frontend.simulasi_kredit');
    }
}
