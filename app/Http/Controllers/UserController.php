<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Family;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function newUser(Request $request)
    {
        $validatedData = $request->validate([
            'firstname' => 'required|string|max:255',
        ]);

        $family = Auth::user(); 
        $familyid = $family->id;
        // dd($familyid);

        $user = User::create([
            'firstname' => $validatedData['firstname'],
            'family_id' => $familyid,
        ]);

        return redirect()->back()->with('success', 'User created succesfully!');
    }
}
