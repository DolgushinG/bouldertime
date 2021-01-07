<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
class ContactController extends Controller
{
    public function index_contact(){
        return view('contact');
    }
    public function send(ContactRequest $request){
        $contact = new Contact();
        $contact->email = $request->old('email');
        $contact->subject = $request->old('subject');
        $contact->message = $request->old('message');
        $contact->firstname = $request->old('firstname');
        $contact->lastname = $request->old('lastname');

        $contact->save();
        return redirect()->route('contact')->with('success', 'Спасибо, за ваше обращение, мы обязательное его прочитаем');
    }
}
