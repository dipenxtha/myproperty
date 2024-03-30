<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $search = $request['search'] ?? "";
        
        if($search!= ""){
            $featured_property = Property::where('verification','1')->where('city', 'LIKE', "%$search%")->
            orWhere('zone', 'LIKE', "%$search%")->
            orWhere('street_no', 'LIKE', "%$search%")->
            orWhere('tole', 'LIKE', "%$search%")->get();
            

            if($featured_property!= ""){
                
            return view('frontend.index', compact('featured_property','search'));
            }
            else{
                return redirect('/')->with('status', 'The location doesnt exists');
            }
        }
        else{
            $featured_property = Property::where('verification','1')->take(15)->get();
            return view('frontend.index', compact('featured_property','search'));
        }
    }
}
