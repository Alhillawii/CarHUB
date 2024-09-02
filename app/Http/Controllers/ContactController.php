<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function index()
    {
        $contacts = Contact::all();
        return view('dashboard.contact.index', ['contacts'=>$contacts]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Contact $contact)
    {
       return view('dashboard.contact.show', ['contact'=>$contact]);
    }

    public function edit(Contact $contact)
    {
        //
    }

    public function update(Request $request, Contact $contact)
    {
        //
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();
        return redirect()->route('contact.index');
    }
}
