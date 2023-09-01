<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::latest()->paginate(50);
        return view('contact.index', compact('contacts'));
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);
        Contact::create($validated);
        return redirect()
            ->back()
            ->with('success', 'Your Message Sent');
    }
    public function destroy(Contact $contact)
    {
        $contact->delete();
        return redirect()
            ->back()
            ->with('success', 'Contact Information Deleted');
    }
}
