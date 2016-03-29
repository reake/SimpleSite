<?php

namespace App\Http\Controllers;

use App\User;
use Validator;
use Illuminate\Http\Request;
use Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        return view('themes/manage/login', ['theme' => 'webapp']);
    }

    public function _login(Request $request)
    {
        $email = $request->get('email');
        $password = $request->get('password');
        // 尝试登录
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            // 认证通过...
            return redirect()->intended('manage/dashboard');
        } else {
            echo 'failed';
        }
    }

    public function register()
    {
        return view('themes/manage/register', ['theme' => 'webapp']);
    }

    public function _register(Request $request)
    {
        $validator = $this->validator($request->all());

        print_r($request->all());
        if ($validator->fails()) {
            echo $validator->getMessageBag();
            exit();
            $this->throwValidationException(
                $request, $validator
            );
        }
        $this->create($request->all());
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'username' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }
}
