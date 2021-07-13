<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class MainController extends Controller
{
    public function home()
    {
        return view('main');
    }
    public function contact()
    {
        return view('contact');
    }
    public function check(Request $request)
    {
        $valid = $request->validate([
            'name' => 'required|min:4',
            'tel' => 'required|min:6|max:13',
            'email' => 'required|email|min:6',
        ]);
        dd($request);
    }
}
