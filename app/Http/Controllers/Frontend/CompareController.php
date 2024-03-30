<?php
namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\Compare;
use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class CompareController extends Controller
{
    public function addProp(Request $request)
    {
        $property_id= $request->input('property__id');
        if(Auth::check()){
            $prop_check = Property::where('id', $property_id)->first();

            if($prop_check){

                if(Compare::where('prop_id',$property_id)->where('user_id',Auth::id())->exists()){
                
                    return response()->jason(['status'=> $prop_check->name."Already added for comparision"]);
                }

                else
                {
                    $compareItem = new Compare();
                    $compareItem ->prop_id = $property_id;
                    $compareItem ->user_id = Auth::id();
                    $compareItem -> save();
                    return redirect('/')->with('status', "Property added for Comparision");
                }
            }
        }
        else{
            return redirect('/')->with('status', "Property a");
        }
    }
}
