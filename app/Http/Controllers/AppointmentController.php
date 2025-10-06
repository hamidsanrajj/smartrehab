<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class AppointmentController extends Controller
{
    //

    public function index()
    {
        return view('index');
    }

    public function query(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $gender = $request->input('gender');
        $dob = $request->input('dob');
        $department = $request->input('department');
        $message = $request->input('message');

        Contact::create([
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'gender' => $gender,
            'dob' => $dob,
            'department' => $department,
            'message' => $message
        ]);

        return view('index');
    }
}
