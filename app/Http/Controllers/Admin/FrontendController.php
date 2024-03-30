<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\Models\Property;
use App\Models\Catagory;

class FrontendController extends Controller
{
   public function index()
   {
        $catagories = Catagory::all();
        $property = Property::all();
       $pie1=DB::select(DB::raw("SELECT count(*) as total_property ,c.type FROM property p join catagories c on c.id= p.cate_id GROUP BY c.type"));
        $chart1data = "";
        foreach ($pie1 as $list) {
            $chart1data.="['".$list->type."', ".$list->total_property."],";
        }
        $arr1['chart1data']=rtrim($chart1data, ",");
        //echo $chart1data;
        
       return view('admin.index', $arr1, compact('catagories','property' ));
   }
}

