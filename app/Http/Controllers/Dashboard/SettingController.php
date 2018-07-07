<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Setting;

class SettingController extends Controller
{
    public function index()
	{
		$setting = Setting::find(1);
		
		return view('dashboard.settings.index',[
			'setting' => $setting
		]);
	}
	
	public function store(Request $request)
	{
        $request->validate([
            'email' => 'required|string|email|max:255|unique:users',
            'tel' => 'required|min:6|max:13',
        ]);
        
		$data = $request->all();
		$setting = Setting::find(1)->update($data);
		return view('dashboard.settings.index',
		['setting' => (object)$data]);
	}
}