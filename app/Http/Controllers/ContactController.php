<?php

namespace App\Http\Controllers;

use App\Http\Requests\SendContactEmail;
use App\Mail\ContactFormSent;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(SendContactEmail $request) {
//        Mail::to('justin_f_111@hotmail.com')->send(new ContactFormSent($request->all()));
        return redirect()->to(url()->previous() . '#contact')->with('success', 'The contact form was successfully submitted.');
    }
}
