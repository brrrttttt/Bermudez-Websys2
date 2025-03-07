<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class PersonalInfoController extends Controller{
    public function form()
    {
        return view('personal-info');
    }

    public function handleform(Request $request)
    {
        $request->validate([
            'first_name' => 'required|max:50',
            'last_name' => 'required|max:50',
            'sex' => ['required', Rule::in(['Male', 'Female'])],
            'mobile_phone' => ['required', 'regex:/^(0998|0999|0920)-\d{3}-\d{3}$/'],
            'tel_no' => 'nullable|numeric',
            'birth_date' => 'required|date_format:Y-m-d',
            'address' => 'required|max:100',
            'email' => 'required|email',
            'website' => 'nullable|url',
        ]);

        $first_name = $request->input('first_name');
        $last_name = $request->input('last_name');
        $sex = $request->input('sex');
        $mobile_phone = $request->input('mobile_phone');
        $tel_no = $request->input('tel_no');
        $birth_date = $request->input('birth_date');
        $address = $request->input('address');
        $email = $request->input('email');
        $website = $request->input('website');
        

        return response()->json([
            'fname' => $first_name,
            'lname' => $last_name,
            'sex' => $sex,
            'mobile_no' => $mobile_phone,
            'tel_no' => $tel_no,
            'birthd' => $birth_date,
            'address' => $address,
            'email' => $email,
            'web' => $website,
        ]);
    }
}
