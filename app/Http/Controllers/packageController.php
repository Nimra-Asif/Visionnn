<?php

namespace App\Http\Controllers;
use App\Models\Packages;
use Auth;
use Illuminate\Http\Request;

class packageController extends Controller
{
    public function pkgForm(){
        return view('tailor/packages');
    }

    public function store(Request $request)
    {
        $items = $request->only(['item_name', 'item_price', 'item_delivery_days']);

        $pkgData = [];
        foreach ($items['item_name'] as $index => $name) {
            if ($name && $items['item_price'][$index] && $items['item_delivery_days'][$index]) {
                $pkgData[] = [
                    'item_name' => $name,
                    'item_price' => $items['item_price'][$index],
                    'item_delivery_days' => $items['item_delivery_days'][$index],
                ];
            }
        }
        // Assuming the tailor is the authenticated user
        $tailorId = Auth::id(); // or $request->user()->id;
        $package = new Packages();
        $package->tailor_id = $tailorId;
        $package->details = $pkgData;
        $package->save();

        return redirect('/')->with('success', 'Package details saved successfully.');
    }
}
