<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserSettingController extends Controller
{
    public function form()
    {
    	return view('admin.pages.user.setting');
    }
}
