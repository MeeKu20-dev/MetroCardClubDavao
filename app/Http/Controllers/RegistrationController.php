<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class RegistrationController extends Controller
{

    public function create()
    {
        return view('pages.registration');
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:100',
            'middle_name' => 'nullable|string|max:100',
            'last_name' => 'required|string|max:100',
            'alternative_name' => 'nullable|string|max:100',
            'civil_status' => 'required|string|max:50',
            'present_address' => 'required|string|max:255',
            'permanent_address' => 'required|string|max:255',
            'birthday' => 'required|date',
            'birth_place' => 'required|string|max:255',
            'mobile_number' => 'required|string|max:20',
            'nationality' => 'required|string|max:50',
            'email' => 'required|email|max:100',
        ]);

        Member::create($validated);

        return redirect()->route('registration')
            ->with('success', 'Member successfully registered!');
    }
}
