<?php

namespace App\Http\Controllers\Frontend;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Property;
use App\Models\Image;
use App\Models\Catagory;
use App\Models\Compare;
use App\Models\Rate;
use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;

class FrontController extends Controller
{
    public function index(Request $request)
    {
        $search = $request['search'] ?? "";
        
        if($search!= ""){
            $featured_property = Property::where('verification','1')->where('city', 'LIKE', "%$search%")->
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


    public function view()
    {
        $catagory = Catagory::all();
        $property = Property::where('verification', '1')->get();
        return view('frontend.buy.index', compact('property','catagory'));
    }



    public function viewproperty($type)
    {
        
        if(Catagory::where('type',$type)->exists()){

            $catagories = Catagory::all();
            $properties = Property::all();
            $catagory = Catagory::where('type', $type)->first();
            $property = Property::where('cate_id', $catagory->id)->where('verification', '1')->get();
            return view('frontend.buy.view', compact('catagory', 'property', 'catagories', 'properties'));
            
        }
        
        else{
            return back()->with('status', 'The type doesnt exists');
        }

    }


    public function propertyview($cata_type,$prop_id)
    {
        if(Catagory::where('type',$cata_type)->exists()){

            if(Property::where('id',$prop_id)->exists()){

                $catagories = Catagory::all();
                $properties = Property::all();
                $images = Image::all();
                $property = Property::where('id', $prop_id)->first();
                return view('frontend.buy.show',compact('property','properties','catagories','images'));
            }

            else{

                return back()->with('status', 'The link was broken');

            }
        }
        else{

             return back()->with('status', 'The link ');

        }
    }

    public function propertyviewindex($prop_id)
    {
        

            if(Property::where('id',$prop_id)->exists()){

                $catagories = Catagory::all();
                $properties = Property::all();
                $images = Image::all();
                $property = Property::where('id', $prop_id)->first();
                return view('frontend.buy.show',compact('property','properties','catagories','images'));
            }

            else{

                return back()->with('status', 'The link was broken');

            }
        

        
    }

    public function move(Request $request)
    {
        $compare= new Compare();
        $property_id= $request->input('prop_id');
        if(Auth::check()){
            $prop_check = Property::where('id', $property_id)->first();
            $ava = Compare::where('user_id',Auth::user()->id)->count();
            

            if($prop_check){

                if(Compare::where('prop_id',$property_id)->where('user_id',Auth::id())->exists()){
                
                    return back()->with('status', "Property already added for Comparision");
                
                }

                elseif ($ava==3) {
                    return back()->with('status', "Sorry! Our comparision limit has excide. You can remove one to add another.");
                }

                else
                {
                  
                        $compare->user_id = Auth::user()->id;
                        $compare->prop_id = $request->input('prop_id');
                        $compare->save();
                        return back()->with('status', "Property added for Comparision");
                   
                }
            }

            else{
                return back()->with('status', "Sorry! Property not available for comparision");
            }
        }
    
    }

    public function about()
    {
        return view('frontend.other.about');
    }

    

    public function remove($id)
    {
        $compare = Compare::find($id);
       
       $compare->delete();
       return back()->with('status', "Removed from Comparision");
    }

    
    

}
