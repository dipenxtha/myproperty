@extends('layouts.front')

@section('title')
    Welcome to My Property
@endsection

@section('content')
    
    <form action="">
        <div style="background-image: url('assets/images/bg2.png'); background-size:cover;height:600px; width:cover;">
            <div style="display: flex; color:antiquewhite;">
                <h3>Complete solution to your problem</h3>
            </div>
            <div class="search-bar" >
                <div class="input-group" style="float: right; margin-top: 200px; padding-left: 25px;">
                    <input type="search"  name="search" id="search_property" class="form-control" placeholder="Enter Location" value="{{$search}}">
                    <button class="input-group-text" id="basic-addon1"><i class="fa fa-search"></i></button>
                </div>
            </div>

        </div>
                    
    </form>
    <div class="py-5">
        <div class="container">
            <div class="row">
                    @foreach($featured_property as $prop)
                        <div class="col-md-3 mt-5">
                        <div class="item">
                            <div class="card" >
                                <img src="{{asset('assets/uploads/property/'. $prop->image)}}" alt="Property Image" style="height: 150px; width: auto;">
                                <div class="card-body">
                                    <h5>{{$prop->tole}}</h5>
                                    <small>{{$prop-> selling_rate}}</small><br/> <br/>
                                    <a href="{{url('view-property/'.'/'.$prop->id)}}" class="btn btn-primary" style="display:inline-block; width: 120px; background-color: #42d7f5;">View More</a>
                                </div>
                            </div>
                        </div>
                        </div>
                    @endforeach
            
            </div>
        </div>
    </div>
  @endsection
    
