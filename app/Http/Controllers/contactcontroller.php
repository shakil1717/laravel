<?php

namespace App\Http\Controllers;

use App\contact;
use Illuminate\Http\Request;

class contactcontroller extends Controller
{


    public function index()
    {
        $contact=contact::all();
       // return $contact;
       return view('forms.contact_list',compact('contact'));
    }

    public function create()
    {
        return view('forms.contact');
    }

    public function store(Request $request)
    {
        $input=$request->all();

        $data=contact::create($input);

        return redirect('contact/create');
    }



}


