<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function register()
    {
       return view('halaman.signup');
    }
    public function home(Request $request){
        $firstname=$request->input("firstname");
        $lastname=$request->input("lastname");

        return view('halaman.index',compact('firstname','lastname'));

    }

}
