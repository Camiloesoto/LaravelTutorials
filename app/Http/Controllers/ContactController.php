<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class ContactController extends Controller
{
    /**
     * Display the contact information page.
     */
    public function index(): View
    {
        return view('contact.index');
    }
}
