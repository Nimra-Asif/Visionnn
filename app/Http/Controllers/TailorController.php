<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class TailorController extends Controller
{
    public function showRegistrationForm()
    {
        return view('Web/tailorRegistrationForm');
    }

    public function registerAsTailor(Request $req)
    {
        $req->validate([
            'shop_address' => 'required|string',
            'shop_timing' => 'required|string',
            'experience' => 'required|string',
            'alternate_number' => 'nullable|numeric',
            'designs' => 'required|array|min:5',
            'designs.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $designPaths = [];

        foreach ($req->file('designs') as $design) {
            $path = $design->store('public/designs');
            $designPaths[] = $path;
        }

        $user = new User();
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = bcrypt($req->password);
        $user->number = $req->number;
        $user->shop_address = $req->shop_address;
        $user->shop_timing = $req->shop_timing;
        $user->experience = $req->experience;
        $user->alternate_number = $req->alternate_number;
        $user->designs =  json_encode($designPaths);
        $user->role = "Tailor";
        $user->save();
        return redirect('/')->with('success', 'Profile created to tailor successfully!');
    }
}