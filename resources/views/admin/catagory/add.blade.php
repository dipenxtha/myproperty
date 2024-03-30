@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="class-header">
            <h3>Add Categories</h3>
        </div>
            <div class="card-body">
                <form action="{{url ('insert-catagory')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">

                        <div class="col-md-6">
                            <label for="">Type</label>
                            <input type="text" class="form-control" name= "type"  required="onsubmit">
                        </div>

                        <div class="col-md-12">
                            <label for="">Description</label>
                            <textarea name="discription" rows="5" class="form-control"  required="onsubmit"></textarea>
                        </div>    

                       
                        <div class="col-md-6 mb-3">
                            <label for="">Status</label>
                            <input type="checkbox" name= "stsus"  required="onsubmit">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="">Popular</label>
                            <input type="checkbox" name= "popular"  required="onsubmit">
                        </div>
                        
                        <div class="col-md-6 mb-3">
                            <label for="">Meta Title</label>
                            <input type="text" class="form-control" name= "meta_title"  required="onsubmit">
                        </div>
                        
                        <div class="col-md-6">
                            <label for="">Meta Keyword</label>
                            <textarea name="meta_keyword" rows="3"  required="onsubmit"></textarea>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="">Meta Description</label>
                            <textarea name="meta_discription" rows="3"  required="onsubmit"></textarea>
                        </div>


                        <div class="col-md-12">
                            <input type="file" name= "image" class="fom-control"  required="onsubmit">
                        </div>

                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary">Submit</button>    
                        </div>
 
                    </div>
                </form>
            </div>
        </div>
@endsection