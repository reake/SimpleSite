<?php

namespace App\Http\Controllers\Main;

use Illuminate\Http\Request;
use Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    public function dashboard()
    {
        $userInfo = Auth::getUser()->toArray();
        return view('themes/manage/dashboard', ['user' => $userInfo]);
    }

    public function version(Request $request)
    {
        print_r(Auth::user());
        print_r($request->user());
        print_r($request->getUserInfo());
    }
}
