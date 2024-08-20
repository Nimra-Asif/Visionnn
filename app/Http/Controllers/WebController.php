<?php

namespace App\Http\Controllers;
use App\Models\Packages;
use App\Models\User;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index(){
        return view("Web/index");
    }

    public function regChoice(){
        return view("Web/registrationChoice");
    }
    public function showTailors()
{
    // Fetch all users with the role 'tailor'
    $tailors = User::where('role', 'tailor')->get();

    // Pass the tailors to the view
    return view('tailor.all_tailors', compact('tailors'));

}

public function showTailorProfile($id)
{
    // Fetch the tailor's details from the users table
    $tailor = User::where('role', 'tailor')->findOrFail($id);

    // Fetch the tailor's packages from the packages table
    $packages = Packages::where('tailor_id', $id)->get();

    // Pass the data to the view
    return view('tailor.profile', compact('tailor', 'packages'));
}
}