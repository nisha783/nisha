<?php

namespace App\Http\Controllers;

use App\Models\contact;
use App\Http\Requests\StorecontactRequest;
use App\Http\Requests\UpdatecontactRequest;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('contact.index');
    }
    public function submit(Request $request)
    {
        $request->validate([
            'full_name' => 'required|string|max:255',
            'email_address' => 'required|email',
            'message' => 'required|string',
            'subject' => 'required|string',
            'phone' => 'required|string',
        ]);

        $data = $request->only('full_name', 'email_address', 'subject', 'phone', 'message');

        // Send email
        $messageBody = "You have received a new contact form submission:\n\n";
        $messageBody .= "Name: {$data['full_name']}\n";
        $messageBody .= "Email: {$data['email_address']}\n";
        $messageBody .= "Phone: {$data['phone']}\n";
        $messageBody .= "Subject: {$data['subject']}\n";
        $messageBody .= "Message:\n{$data['message']}\n";

        // Send email
        Mail::raw($messageBody, function ($message) use ($data) {
            $message->to('shakeel2717@gmail.com')
                    ->subject($data['subject'] ?? 'Contact Form Submission');
        });
        
        return redirect()->route('contact.index')->with('success', 'Your message has been sent!');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorecontactRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatecontactRequest $request, contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(contact $contact)
    {
        //
    }
}
