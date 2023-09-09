<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function confirm(Request $request)
    {
        $contact = $request->only(['last-name', 'first_name', 'gender', 'email', 'postcode', 'address', 'building_name', 'opinion']);
        return view('confirm', ['form' => $form]);
    }

    public function store(ContactRequest $request)
    {
        $contact = $request->only(['last-name', 'first_name', 'gender', 'email', 'postcode', 'address', 'building_name', 'opinion']);
            Contact::create($contact);
                return view('thanks');
    }
}
