<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['login', 'auth']);
        $this->middleware('permission:user.permission_admin_panel')->except(['login', 'auth']);
    }

    public function index()
    {
        return view('admin.index.index');
    }

    public function login()
    {
        return view('admin.login.login');
    }

    protected function auth(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => ['required', 'string', 'min:3', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'max:255'],
        ]);
        if($validator->fails())
            return redirect()->back()->withInput()->withErrors($validator->errors());

        $userdata = $request->only(['username', 'password']);
        if(!Auth::guard()->attempt($userdata, $request->get('remember_me')))
            return redirect()->back()->withInput()->withErrors('Неверный логин или пароль!');

        if(!Auth::guard()->user()->hasPermissionTo('user.permission_admin_panel'))
        {
            Auth::guard()->logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            return redirect()->back()->withInput()->withErrors('У вас нет прав для админ панели!');
        }

        return redirect()->route('admin_home');
    }

    public function logout(Request $request)
    {
        Auth::guard()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->back()->with(['message' => 'Вы успешно вышли!']);
    }
}
