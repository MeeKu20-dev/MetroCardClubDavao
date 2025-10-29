<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index()
    {
        // Get all members from the database
        $members = Member::all();

        // Pass them to the view
        return view('pages.members', compact('members'));
    }
}
