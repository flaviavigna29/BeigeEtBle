<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function homepage(){
        return view('welcome');
    }
    public function rooms(){
        return view('rooms');
    }

    public function contact_us(){
        return view('contact-us');
    }

    public function book_now(){
        return view('book-now');
    }
}
