<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contact = Contact::find([1]);
        // dd($contact);
        // $contact = new Contact();
        // $contact->name = 'samit';
        // $contact->email = 'samitshrestha@gmail.com';
        // $contact->message = 'hello its me';
        // $contact->save();
        // Contact::create(['name' => 'samitshresthaadd',
        //     'email' => 'samitaddhh@gmail.com',
        //     'message' => 'hello',
        // ]);
        // $contact = Contact::all();
        // dd($contact);
        // $collection = collect([1, 2, 3]);

        return view('contact');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);
        // dd($request);
        $contact = Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ]);
        return redirect()->back()->with('success', 'thank you for contacting us');
    }
}
