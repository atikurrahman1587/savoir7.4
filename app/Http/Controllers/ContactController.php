<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request): object
    {
        Contact::newContact($request);
        return back()->with('success', 'Successful');
    }
}
