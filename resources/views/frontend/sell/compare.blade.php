@extends('layouts.front')

@section('content')
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
    hr{
        border: 1px  green;
    }
    h5{
        font-family: "Times New Roman", Times, serif;
        text-align: justify;
    }
</style>  
@if( $ava > 0 )
<div style="padding-top: 50px;padding-left: 50px;" class=" wrapper">
    <div class="class-header">
        <h2 style="text-align: center;">Compare Results</h2>
    </div>
                <div class="main-panel" style="margin-right: 50px; margin-bottom: 50px; height:auto; ">
    <div style=" height:500px;">
        <div class="container" >
            <div class="row" >
                <div class="col-md-3 mt-5">
                    <div class="item" style=" width: 260px;" >
                                <div class="card">
                                    <div style="height: 150px; width: 253px; ">
                                    <br>
                                    <br>
                                    <h3 style="text-align: center;">Image</h3>
                                    </div>
                                        <div class="card-body" style="color: black; ">
                                        <hr>
                                            <h5>Property Type:</h5>
                                            <hr>
                                            <h5>Province:</h5>
                                            <br>
                                            <h5>District:</h5>
                                            <br>
                                            <h5>Postal Code:</h5>
                                            <br>
                                            <h5>City:</h5>
                                            <br>
                                            <h5>Ward No:</h5>
                                            <br>
                                            <h5>Tole:</h5>
                                            <hr>
                                            <h5>Area:</h5>
                                            <br>
                                            <h5>Structure Area:</h5>
                                            <br>
                                            <h5>Structure Age:</h5>
                                            <br>
                                            <h5>Room Number:</h5>
                                            <br>
                                            <h5>Stories Number:</h5>
                                            <hr>
                                            <h5>Water Supply</h5>
                                            <br>
                                            <h5>Drainage</h5>
                                            <br>
                                            <h5>Electricity</h5>
                                            <br>
                                            <h5>Public Transport</h5>
                                            <hr>
                                            <h5>High Tension</h5>
                                            <br>
                                            <h5>River Side</h5>
                                            <hr>
                                            <h5>Selling Rate:</h5>
                                            <small></small>
                                        </div>
                                        
                                    
                                    </div>
                        </div>
                    </div>
                    
                    @foreach($compare as $com)
                @if( $com->user_id == Auth::user()->id)
                <div class="col-md-3 mt-5">
                    <div class="item" style=" width: 260px;" >
                        @foreach($property as $prop)
                            @if( $com->prop_id == $prop->id)
                                <div class="card">
                                    <img src="{{asset('assets/uploads/property/'. $prop->image)}}" alt="Property Image" style="height: 150px; width: 253px;">
                                        <div class="card-body" style="color: black; ">
                                            <hr>
                                            <h5> {{$prop->catagory->type}}</h5>
                                            <hr>
                                            <h5> {{$prop->provience}}</h5>
                                            <br>
                                            <h5> {{$prop->district}}</h5>
                                            <br>
                                            <h5> {{$prop->postal_code}}</h5>
                                            <br>
                                            <h5> {{$prop->city}}</h5>
                                            <br>
                                            <h5> {{$prop->ward_no}}</h5>
                                            <br>
                                            <h5> {{$prop->tole}}</h5>
                                            <hr>
                                            <h5> {{$prop->area}}</h5>
                                            <br>
                                            @if($prop->structure_area == "")
                                                <h5>--------</h5>
                                            @else
                                                <h5> {{$prop->structure_area}}</h5>
                                            @endif
                                            <br>
                                            @if($prop->structure_age == "")
                                                <h5>--------</h5>
                                            @else
                                                <h5> {{$prop->structure_age}}</h5>
                                            @endif
                                            <br>
                                            @if($prop->room_no == "")
                                                <h5>--------</h5>
                                            @else
                                                <h5> {{$prop->room_no}}</h5>
                                            @endif
                                            <br>
                                            @if($prop->stories_no == "")
                                                <h5>--------</h5>
                                            @else
                                                <h5> {{$prop->stories_no}}</h5>
                                            @endif
                                            <hr>
                                            @if($prop->water_supply == "1")
                                                <h5>Yes</h5>
                                            @else
                                                <h5>No</h5>
                                            @endif
                                            <br>
                                            @if($prop->drainage == "1")
                                                <h5>Yes</h5>
                                            @else
                                                <h5>No</h5>
                                            @endif
                                            <br>
                                            @if($prop->electricity == "1")
                                                <h5>Yes</h5>
                                            @else
                                                <h5>No</h5>
                                            @endif
                                            <br>
                                            @if($prop->p_transport == "1")
                                                <h5>Yes</h5>
                                            @else
                                                <h5>No</h5>
                                            @endif
                                            <hr>
                                            @if($prop->hypertension == "1")
                                                <h5>Yes</h5>
                                            @else
                                                <h5>No</h5>
                                            @endif
                                            <br>
                                            
                                                <h5>No</h5>
                                            
                                            <hr>
                                            <h5> Rs {{$prop->selling_rate}}</h5>
                                            
                                        </div>
                                        <td>
                                            <a href="{{url('view-property/'.'/'.$prop->id)}}" class="btn btn-primary" style="display:inline-block; width: 120px; background-color: #42d7f5;">View More</a>
                                            <br>
                                            <a href="{{url('remove-compare/'.$com->id)}}" class="btn btn-primary" style="display:inline-block; width: 100px; background-color: #b81d1d;">Remove</a>
                                        </td>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                @endif
                
                
            @endforeach
            </div>
    </div>   
    </div> 
</div>
            @else
            
        <div class="container" style="height:210px; text-align:center;">
            <br>
            <br>
            <br>
            <br>
            <h1 style=>Add properties for comparision</h1>
            <br>
            <a href="{{url('view-in-compare')}}" class="btn btn-primary" style="display:inline-block; width: 200px;">View Properties</a>
            <br>
            <label style="color:grey; font-size:x-small;">*By clicking on the button you can add protery for comparision*</label>
</div>
            @endif
            
@endsection