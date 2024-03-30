@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="class-header">
            <h3>Edit/Update Categories</h3>
        </div>
            <div class="card-body">
                <form action="{{url ('update-prop/'.$catagory->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">

                        <div class="col-md-6">
                            <label for="">Type</label>
                            <input type="text" value="{{$catagory->type}}" class="form-control" name= "type">
                        </div>

                        <div class="col-md-12">
                            <label for="">Description</label>
                            <textarea name="discription"rows="5" class="form-control"   required="onsubmit"> {{$catagory->discription}} </textarea>
                        </div>    

                        <div class="col-md-6 mb-3">
                            <label for="">Status</label>
                            <input type="checkbox" {{ $catagory->status=="0" ? 'checked':''}} name= "status"  required="onsubmit">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="">Popular</label>
                            <input type="checkbox" {{$catagory->popular == "1" ? 'checked': ''}} name= "popular"  required="onsubmit">
                        </div>
                        
                        <div class="col-md-6 mb-3">
                            <label for="">Meta Title</label>
                            <input type="text" value="{{$catagory->meta_title}}" class="form-control" name= "meta_title"  required="onsubmit">
                        </div>
                        
                        <div class="col-md-6">
                            <label for="">Meta Keyword</label>
                            <textarea name="meta_keyword" rows="3"  required="onsubmit" >{{$catagory->meta_keyword}}</textarea>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="">Meta Description</label>
                            <textarea name="meta_discription" rows="3"  required="onsubmit" >{{$catagory->meta_discription}}</textarea>
                        </div>

                        @if($catagory->image)
                            <img src="{{asset('assets/uploads/catagory/'.$catagory->image)}}" alt="Property Images"  required="onsubmit">
                        @endif
                        <div class="col-md-12">
                            <input type="file" name= "image" class="fom-control">
                        </div>

                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary">Submit</button>    
                        </div>
 
                    </div>
                </form>
            </div>
        </div>
@endsection