<?php

namespace App\Http\Controllers;

use App\Mail\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    public function homepage()
    {
        return view('welcome');
    }

    public function rooms()
    {
        return view('rooms');
    }

    public function cassiopea()
    {
        return view('cassiopea');
    }

    public function contact_us()
    {
        return view('contact-us');
    }

    public function send_email(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'option' => 'required|string',
            'number' => 'nullable|string|max:255',
            'message' => 'required|string',
        ]);

        $contactMail = $request->only(['name', 'surname', 'email', 'option', 'number', 'message']);

        Mail::to('info@beigeetbleguesthouse.com')->send(new ContactUs($contactMail));

        return redirect()->back()->with('message', 'Your message has been sent correctly!');
    }

    public function book_now()
    {
        return view('book-now');
    }

    public function setLanguage($lang)
    {
        session()->put('locale', $lang);
        return redirect()->back();
    }
}
