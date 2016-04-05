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
        $result = array(
            'user'       => $userInfo,
            'app'        => array(
                'name'    => 'SimpleSite',
                'version' => '1.0.0',
                'color'   => array(
                    'primary' => '#0cc2aa',
                    'accent'  => '#a88add',
                    'warn'    => '#fcc100',
                    'info'    => '#6887ff',
                    'success' => '#6cc788',
                    'warning' => '#f77a99',
                    'danger'  => '#f44455',
                    'white'   => '#ffffff',
                    'light'   => '#f1f2f3',
                    'dark'    => '#2e3e4e',
                    'black'   => '#2a2b3c'
                ),
                'setting' => array(
                    'theme'     => array(
                        'primary' => 'primary',
                        'accent'  => 'accent',
                        'warn'    => 'warn'
                    ),
                    'color'     => array(
                        'primary' => '#0cc2aa',
                        'accent'  => '#a88add',
                        'warn'    => '#fcc100'
                    ),
                    'folded'    => false,
                    'boxed'     => false,
                    'container' => false,
                    'themeID'   => 1,
                    'bg'        => ''
                )
            ),
            'appVersion' => 'v1.0.0',
            'basePath'   => '../webapp/dist/',
        );
        return view('themes/manage/dashboard', $result);
    }

    public function version(Request $request)
    {
        print_r(Auth::user());
        print_r($request->user());
        print_r($request->getUserInfo());
    }
}
