<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Rate;
use App\Models\Catagory;
class ValuateController extends Controller
{
    public function value()
    {
        $rate = Rate::all();
        $provience = Rate::select('provience')
                    ->pluck('provience')
                    ->unique();
         $district = Rate::select('district')
                    ->pluck('district')
                    ->unique();            
        $postal_code = Rate::select('postal_code')
                    ->pluck('postal_code')
                    ->unique();
        $city = Rate::select('city')
                    ->pluck('city')
                    ->unique();
        $street_no = Rate::select('street_no')
                    ->pluck('street_no')
                    ->unique();
        $tole = Rate::select('tole')
                    ->pluck('tole')
                    ->unique();
        $ward_no = Rate::select('ward_no')
                    ->pluck('ward_no')
                    ->unique();
        $catagory = Catagory::all();
        return view('frontend.other.valuate', compact('rate', 'catagory','provience',
         'district','city', 'postal_code', 'street_no', 'tole', 'ward_no'));
    }

    public function valuate(Request $request)
    {
        $cate = $request->input('cate_id');
        $district = $request->input('district');   
        $provience = $request->input('provience');
        $postal_code = $request->input('postal_code');
        $city = $request->input('city');
        $street_no = $request->input('street_no');
        $tole = $request->input('tole');
        $ward_no = $request->input('ward_no');
        $area = $request->input('area');  
        $structure_age = $request->input('structure_age');
        $storey1 = $request->input('storey1');
        $storey2 = $request->input('storey2');
        $storey3= $request->input('storey3');
        $storey4 = $request->input('storey4');
        $storey5 = $request->input('storey5');
        $storey6 = $request->input('storey6');
        $storey7 = $request->input('storey7');
        $storey8 = $request->input('storey8');
        $storey9 = $request->input('storey9');
        $storey10 = $request->input('storey10');

        $for_rate = Rate::select('max_rate','min_rate')
            ->where('district',$district)
            ->where('provience',$provience)
            ->where('postal_code',$postal_code)
            ->where('city',$city)
            ->where('street_no',$street_no)
            ->where('tole',$tole)
            ->where('ward_no',$ward_no)->get();
            echo $for_rate;

        if ($for_rate->isEmpty()){
            return redirect('valuate-property')->with('status',"The credentials did not match with our records please try again with correct information.");
        }
        else{
            $decodedObject = json_decode($for_rate);
            
            foreach($decodedObject as $key => $value) {
                $fair_market_value = $value->max_rate;
                $distress_value = $value->min_rate;
            }

            $valueA = ($fair_market_value*70)/100 ;
            $valueB = ($distress_value*30)/100;
            $average_rate = $valueA + $valueB;

            if($cate == 1){
                $final_rate = $area * $average_rate;
                return redirect('valuate-property')->with('status',"The total Valuation of your Property is Rs ".$final_rate);
            }
            else{
                $structure_rate = ($storey1 * 4000)+ ($storey2 * 4000) + ($storey3 * 4000)+ ($storey4 * 3000) + ($storey5 * 3000)+ ($storey6 * 3000)+ ($storey7 * 2000)+ ($storey8 * 2000)+ ($storey9 * 2000)+ ($storey10 * 2000);
                if ($structure_age=="") {
                    $structure_age = 1;
                    $land_rate= $area * $average_rate;
                    $final_rate = $structure_rate + $land_rate;

                    return redirect('valuate-property')->with('status', "The total Valuation of your Property is Rs ".$final_rate);
                }
                else{

                    $depreciation= pow((1-2),$structure_age);
                    $after_depreciation = $structure_rate*$depreciation;
                    $land_rate= $area * $average_rate;
                    $final_rate = $after_depreciation + $land_rate;

                    return redirect('valuate-property')->with('status', "The total Valuation of your Property is Rs ".$final_rate);
                }
                
            }
        }
    }    
}
