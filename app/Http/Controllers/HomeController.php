<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use TCG\Voyager\Facades\Voyager;


class HomeController extends Controller
{
    //
    public function index(Request $request)
    {
        if ($this->guard()->user()) {
            return view('index');
        }

        return Voyager::view('voyager::login');
    }

    protected function guard()
    {
        return Auth::guard(app('VoyagerGuard'));
    }
}
