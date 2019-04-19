<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contactcontroller extends Controller
{



    public function create()
    {
        return view('forms.contact');
    }

    public function store(Request $request)
    {
        $data=$request->all();
      return $input;
    }



}


