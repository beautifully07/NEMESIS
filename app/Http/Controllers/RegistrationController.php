<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function index()
    {
        $registrations = Registration::all();
        $data = ([
            "title" => "Registrations",
            "registrations" => $registrations
        ]);
        return view('registration.index', $data);
    }
}
