<?php

namespace App\Http\Controllers;

use App\Models\ContactModel;
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
            'name' => 'required|min:2|max:10',
            'tel' => 'required|min:6|max:13',
            'email' => 'required|email|min:6',
        ]);
        $contact = new ContactModel();
        $contact->name = $request->input('name');
        $contact->telephone = $request->input('tel');
        $contact->email = $request->input('email');
        $contact->save();
        return redirect()->route('home');
        // dd($request);
    }
}
