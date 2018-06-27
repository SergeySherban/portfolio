<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Setting;

class DefaultController extends Controller
{
    public function index()
	{
        $setting = Setting::find(1);
        
		return view('default.index', [
			'setting' => $setting
		]);
	}
    
    public function store(Request $request)
	{
		$data = $request->all();
		$setting = Setting::find(1)->update($data);
		return view('default.index',
		['setting' => (object)$data]);
	}
}
