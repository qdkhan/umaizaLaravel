<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackendController extends Controller
{
    public function createTeam(Request $request) {
        $validated = $request->validate([
            'name'          => 'required',
            'designation'   => 'required',
            'profile_image' => 'required|mimes:jpg,jpeg,png|max:1024',
        ]);

    }
}
