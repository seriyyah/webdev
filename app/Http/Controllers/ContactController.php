<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


use App\Http\Requests\ContactRequest;
use Mail;
use App\Mail\NewContactRequest;

class ContactController extends Controller
{
    public function show()
    {
        return view('contact');


    }
    public function mail( ContactRequest $request)
    {
        Mail::to('info@webdev.com')->send(new NewContactRequest($request));
        return redirect()->route('home')->with('success', 'Сообщение Было Отпривлено');
    }
}
