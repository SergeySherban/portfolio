<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Portfolio;
use App\Models\Setting;
use Illuminate\Http\Request;

class DefaultController extends Controller
{
    public function index()
    {
        $setting = Setting::find(1);
        $about = About::find(1);
        $portfolio = Portfolio::all();
        return view('default.index',[
            'setting'=>$setting,
            'about'=>$about,
            'portfolios'=>$portfolio
        ]);
    }
}
