<?php

namespace App\Http\Controllers\Admin;
use App\Models\Image; 
use App\Http\Controllers\Controller;
use App\Models\Catagory;
use Illuminate\Support\Facades\File;
use App\Models\Property;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\File as FacadesFile;
use Illuminate\Support\Facades\Storage;
//use Illumnate\Support\Facades\File;

class CatagoryController extends Controller
{
    public function index()
    {
        $catagory = Catagory::all();
        return view('admin.catagory.index', compact('catagory'));
    }
    public function add()
    {
        return view('admin.catagory.add');
    }

    public function insert(Request $request)
    {
        $catagory = new Catagory();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('assets\uploads\catagory', $filename);
            $catagory->image = $filename;
        }
        $catagory->type = $request->input('type');
        $catagory->discription = $request->input('discription');
        $catagory->status = $request->input('status') == TRUE ? '1' : '0';
        $catagory->popular = $request->input('popular') == TRUE ? '1' : '0';
        $catagory->meta_title = $request->input('meta_title');
        $catagory->meta_keyword = $request->input('meta_keyword');
        $catagory->meta_discription = $request->input('meta_discription');
        $catagory->save();
        return back()->with('status', "Category added Successfully");
    }


    public function edit($id)
    {
        $catagory = Catagory::find($id);
        return view('admin.catagory.edit', compact('catagory'));
    }

    public function verify()//next conroller
    {
        $property = Property::all();
        return view('admin.verify.index', compact('property'));
    }

    public function verified_list()//next conroller
    {
        $property = Property::all();
        return view('admin.verify.verified', compact('property'));
    }

    public function update(Request $request, $id)
    {
        $catagory = Catagory::find($id);
        if ($request->hasFile('image')) {
            $path = 'assets/uploads/catagory/' . $catagory->image;

            if (Storage::exists($path)) {
                Storage::delete($path);
            }

            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('assets\uploads\catagory', $filename);
            $catagory->image = $filename;
        }
        $catagory->type = $request->input('type');
        $catagory->discription = $request->input('discription');
        $catagory->status = $request->input('status') == TRUE ? '1' : '0';
        $catagory->popular = $request->input('popular') == TRUE ? '1' : '0';
        $catagory->meta_title = $request->input('meta_title');
        $catagory->meta_keyword = $request->input('meta_keyword');
        $catagory->meta_discription = $request->input('meta_discription');
        $catagory->update();
        return back()->with('status', "Category updated Successfully");
    }

    public function destroy($id)
    {
        $catagory = Catagory::find($id);

        if($catagory->image)
        {
            $path = 'assets/uploads/catagory/' . $catagory->image;
            if (Storage::exists($path)) {
                Storage::delete($path);
            }
        }

        $catagory->delete();
        return back()->with('status',"Category deleted Sucessfully");
    }

    public function reject($id)//next conroller
   {
    $property = Property::find($id);

    if($property->image)
    {
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
    return back()->with('status',"Property rejected ");
   }

   

   public function verified(Request $request, $id)//next
   {
       if (isset($_POST['verify'])){
        $property =  Property::find($id);
        $property->verification = 1;
        $property->save();
        $property_user = User::select('email')->where('id', $property->user_id)->get();
        $details= $request->input('reason');
    
        Mail::to($property_user)->send(new TestMail($details));
        return back();
       }

       if (isset($_POST['reject'])) {
        $property =  Property::find($id);
        $property->verification = 1;
        $property->save();
        $property_user = User::select('email')->where('id', $property->user_id)->get();
        $details= $request->input('reason');
    
        Mail::to($property_user)->send(new TestMail($details));
        if($property->image)
    {
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
    return back()>with('status',"Property deleted Sucessfully");
    
       }
    }

    public function viewimg($id)
    
    {  $properties = Property::all();
        $images = Image::all();
        $property = Property::where('id', $id)->first();
        return view('admin.verify.viewimg',compact('property','properties','images'));
    }

    public function back()
    {
        $property = Property::all();
        return view('admin.verify.verified', compact('property'));
    }
    
    public function removeverified($id)
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


}
