<?php

namespace App\Http\Controllers\Customer;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Catagory;
use App\Models\Property;
use App\Models\Compare;
use App\Models\Image; 
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
   public function index()
   {
       $property = Property::all();
       return view('frontend.sell.index', compact('property'));
   }


   public function add()
   {
       $catagory = Catagory::all();
       return view('frontend.sell.add',compact('catagory'));
   }

   public function insert(Request $request)
   {
       
    $property = new Property();

    if ($request->hasFile('image')) {
        $file = $request->file('image');
        $ext = $file->getClientOriginalExtension();
        $filename = time() . '.' . $ext;
        $file->move('assets\uploads\property', $filename);
        $property->image = $filename;
    }

    $property->user_id = Auth::user()->id;
    $property->cate_id = $request->input('cate_id');
    $property->provience = $request->input('provience');
    $property->district = $request->input('district');
    $property->postal_code = $request->input('postal_code');
    $property->city = $request->input('city');
    $property->ward_no = $request->input('ward_no');
    $property->tole = $request->input('tole');
    $property->street_no = $request->input('street_no');
    $property->road_length = $request->input('road_length');
    $property->road_type = $request->input('road_type');
    $property->direction_faced = $request->input('direction_faced');
    $property->structure_area = $request->input('structure_area');
    $property->room_no = $request->input('room_no');
    $property->stories_no = $request->input('stories_no');
    $property->structure_age = $request->input('structure_age');
    $property->area = $request->input('area');
    $property->hypertension = $request->input('hypertension') == TRUE ? '1' : '0';
    $property->river_side = $request->input('river_side') == TRUE ? '1' : '0';
    $property->water_supply = $request->input('water_supply') == TRUE ? '1' : '0';
    $property->drainage = $request->input('drainage') == TRUE ? '1' : '0';
    $property->electricity = $request->input('electricity') == TRUE ? '1' : '0';
    $property->p_transport = $request->input('p_transport') == TRUE ? '1' : '0';
    $property->discription = $request->input('discription');
    $property->selling_rate = $request->input('selling_rate');
    $property->verification = $request->input('verification') == TRUE ? '1' : '0';
    
    $property->save();
    $image= array();
    if ($request->hasFile("images")){
        $flies= $request->file("images");
        foreach($flies as $file){
            $imageName= time().'_'.$file->getClientOriginalName();
            $upload_path = 'assets\uploads\property';
            $file->move($upload_path,$imageName);
            $image[]=$imageName;
            Image::insert([
                'image'=> $imageName,
                'property_id' => $property->id,
            ]);
    }


   }
   
   return back()->with('status', "Property added Successfully");

}


   public function edit($id)
   {
    $property = Property::find($id);
    return view('frontend.sell.edit',compact('property'));
    }


    public function update(Request $request, $id)
    {
        $property = Property::find($id);
        if ($request->hasFile('image')) {
            $path = 'assets/uploads/property/' . $property->image;

            if (Storage::exists($path)) {
                Storage::delete($path);
            }   
        
        $file = $request->file('image');
        $ext = $file->getClientOriginalExtension();
        $filename = time() . '.' . $ext;
        $file->move('assets\uploads\property', $filename);
        $property->image = $filename;

        }
        $property->user_id = Auth::user()->id;
        $property->provience = $request->input('provience');
    $property->district = $request->input('district');
    $property->postal_code = $request->input('postal_code');
    $property->city = $request->input('city');
    $property->ward_no = $request->input('ward_no');
    $property->tole = $request->input('tole');
    $property->street_no = $request->input('street_no');
    $property->road_length = $request->input('road_length');
    $property->road_type = $request->input('road_type');
    $property->direction_faced = $request->input('direction_faced');
    $property->structure_area = $request->input('structure_area');
    $property->room_no = $request->input('room_no');
    $property->stories_no = $request->input('stories_no');
    $property->structure_age = $request->input('structure_age');
    $property->area = $request->input('area');
    $property->hypertension = $request->input('hypertension') == TRUE ? '1' : '0';
    $property->river_side = $request->input('river_side') == TRUE ? '1' : '0';
    $property->water_supply = $request->input('water_supply') == TRUE ? '1' : '0';
    $property->drainage = $request->input('drainage') == TRUE ? '1' : '0';
    $property->electricity = $request->input('electricity') == TRUE ? '1' : '0';
    $property->p_transport = $request->input('p_transport') == TRUE ? '1' : '0';
    $property->discription = $request->input('discription');
    $property->selling_rate = $request->input('selling_rate');
    $property->verification = $request->input('verification') == TRUE ? '1' : '0';
        $property->update();
        return back()->with('status', "Property updated Successfully");


    }

    public function deleteprop($id)
    {
        $property = Property::find($id);
        if ($property->image) {
            $path = 'assets/uploads/property/' . $property->image;
            if (Storage::exists($path)) {
                Storage::delete($path);
            }
        }
        $images=Image::where("property_id",$property->id)->get();
        foreach ($images as $image) {
            if (File::exists("images/".$image->image)) {
                File::delete("images/".$image->image);
            }
        }
        $property->delete();
        return back()->with('status',"Property deleted Sucessfully");
        
    }

    public function compare( )
    {
        $compare = Compare::all();
        $property = Property::all();
        $ava = Compare::where('user_id',Auth::user()->id)->count();
        return view('frontend.sell.compare', compact('compare', 'property','ava')) ;
    }
}


