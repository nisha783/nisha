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
        Mail::send('contact.index', $data, function ($message) use ($data) {
            $message->to('hm6980097@gmail.com') // Replace with the recipient email address
                ->subject('New Contact Form Submission: ' . $data['subject']);
        });
        // Handle the submission (e.g., save to database or send email)
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
