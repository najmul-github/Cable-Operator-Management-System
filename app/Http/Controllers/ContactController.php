<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Package;

class ContactController extends Controller
{
    public function index()
    {
        return view('guest.contact');
    }
    public function store(Request $request)
    {
        $contactDetails=$request->all();
        Contact::create($contactDetails);
        return redirect('/contact')->withMessage('Your Message successfully sent');
    }
    public function guestPackage() {
        $packages=Package::all();
        return view('guest.package',compact('packages'));
    }
    public function userMessage()
    {
        $messages=Contact::all();
        return view('admin.userMessage',compact('messages'));
    }
    public function userMessageDelete($message_id)
    {
        $message_id=Contact::where('id',$message_id)->first()->delete();
        return redirect('/userMessage')->withMessage('User Message Deleted Successfully');
    }
    
}
