<?php

namespace App\Http\Controllers\Websites;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactUsControler extends Controller
{
    public function index () {
        return view('websites.contact-us.index');
    }
}
