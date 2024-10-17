<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactFormRequest;
use App\Http\Requests\UpdateContactFormRequest;
use App\Mail\ContactFormMail;
use App\Models\ContactForm;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StoreContactFormRequest $request)
    {
        $contactForm = ContactForm::create($request->validated());
        // Mail::to(config('mail.from.address'))->send(new ContactFormMail($contactForm));
        
        // return (new ContactFormMail($contactForm))->render();
        return redirect()->back()->with('status', 'Thank you, your message has been sent successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(ContactForm $contactForm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ContactForm $contactForm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateContactFormRequest $request, ContactForm $contactForm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ContactForm $contactForm)
    {
        //
    }
}
