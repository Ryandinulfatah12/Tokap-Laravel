<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class UserController extends Controller
{
	public function daftar(Request $req)
	{
		$data = User::where('name','like',"%{$req->keyword}%")->paginate(10);
   		return view('admin.pages.user.daftar',['data'=>$data]);
	}
    
    public function add()
    {
    	return view('admin.pages.user.add');
    }

	public function save(Request $req)
	{
		return 'Fungsi Save';
	}
}
