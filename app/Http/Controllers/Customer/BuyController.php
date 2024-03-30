<?php

namespace App\Http\Controllers\Customer;

use App\Models\Property;
use App\Http\Controllers\Controller;
use App\Models\Catagory;
use Illuminate\Http\Request;

class BuyController extends Controller
{
    public function view()
    {
        $catagory = Catagory::all();
        $property = Property::all();
        return view('frontend.buy.index', compact('property','catagory'));
    }

    public function viewproperty($type)
    {
        if(Catagory::where('type',$type)->exists()){

            $catagory = Catagory::where('type', $type)->first();
            $property = Property::where('id', $catagory->id)->where('verification', '1')->get();
            return view('frontend.buy.view', compact('catagory', 'property'));
        }
        
        else{
            return back()->with('status', 'The type doesnt exists');
        }
        
    }
}
