<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Rate;
use Illuminate\Http\Request;

class RateController extends Controller
{
   public function index()
   {
       $rate = Rate::all();
       return view('admin.rate.index', compact('rate'));
   }

   public function add()
   {
       
      return view('admin.rate.add');
   }

   public function insert(Request $request)
   {
       $rate = new Rate;

       $rate->provience = $request->input('provience');
       $rate->district = $request->input('district');
       $rate->postal_code = $request->input('postal_code');
       $rate->city = $request->input('city');
       $rate->ward_no = $request->input('ward_no');
       $rate->tole = $request->input('tole');
       $rate->street_no = $request->input('street_no');
       $rate->max_rate = $request->input('max_rate');
       $rate->min_rate = $request->input('min_rate');
       $rate->save();
       return back()->with('status', "Rate added Successfully");
   }

   public function edit($id)
   {
      $rate = Rate::find($id);
      return view('admin.rate.edit', compact('rate'));
   }

   public function update(Request $request, $id)
   {
       $rate = Rate::find($id);
       
       $rate->provience = $request->input('provience');
       $rate->district = $request->input('district');
       $rate->postal_code = $request->input('postal_code');
       $rate->city = $request->input('city');
       $rate->ward_no = $request->input('ward_no');
       $rate->tole = $request->input('tole');
       $rate->street_no = $request->input('street_no');
       $rate->max_rate = $request->input('max_rate');
       $rate->min_rate = $request->input('min_rate');
       $rate->update();
       return back()->with('status', "Rate updated Successfully");
   }
   

   public function destroy($id)
   {
       $rate = Rate::find($id);
       
       $rate->delete();
       return back()->with('status', "Rate deleted Successfully");
   }
}
