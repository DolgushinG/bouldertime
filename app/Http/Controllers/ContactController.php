<?php

namespace App\Http\Controllers;
use App\Contact;
use App\Http\Requests\ContactRequest;
class ContactController extends Controller
{
    public function index_contact(){
        return view('contact');
    }
    public function send(ContactRequest $request){
        $contact = new Contact();
        $contact->email = $request->input('email');
        $contact->subject = $request->input('subject');
        $contact->message = $request->input('message');
        $contact->firstname = $request->input('firstname');
        $contact->lastname = $request->input('lastname');
        $contact->save();
        return redirect()->route('contact')->with('success', 'Спасибо, за ваше обращение, мы обязательное его прочитаем');
    }
}
