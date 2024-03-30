@extends('layouts.front')
@section('title')

@endsection
@section('content')
<div class="wrapper property_data">   
    <form action="{{url ('compare-move')}}" method="POST" enctype="multipart/form-data">
         @csrf
        <div class="sidebar" data-image="../assets/img/sidebar-5.jpg">
            <div class="sidebar-wrapper" style="background-color: #0d1740;">
               <h3>Property Type</h3>
               <ul class="nav">
                    @foreach($catagories as $cat)   
                        <li class="{{Request::is('$cat->type') ? 'active': ''  }}">
                            <a class="nav-link" href="{{ url('view-property/'.$cat->type) }}">
                            <i class="fas fa-chart-line"></i>
                                <p>{{$cat->type}}</p>
                            </a>
                        </li>
                    @endforeach
               </ul>
            </div>
        </div>
        <div class="main-panel" style="height: 700px;">
                <div class="content">
        <div class="card mb-3 property_data"  >
            <div class="row g-0" >
                <div class="col-md-4">
                    <img  src="{{asset('assets/uploads/property/'. $property->image)}}" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <button style="float: right; " class="btn btn-primary me-3 addtoCompare float-start"> Move to Compare</button>
                        <h4> {{$property->catagory->type}} at {{$property->district}}'s {{$property->city}}</h4>
                
                        <hr style=" border: 10px solid grey; border-radius: 5px;">
                        <p class="card-text">{{$property->discription}}</p>
                        <hr> 
                        <input type="hidden" value="{{$property->id}}" name="prop_id">
                        <h3>Location</h3>
                        <div class="flex-container">
                            <div class="flex-child">
                                <label for="fw-bold"> <b>Provience : </b> {{$property->provience}}</label><br>
                                <label for="fw-bold"> <b> City :</b> {{$property->city}}</label><br>
                                <label for="fw-bold"> <b>Street Number :</b>  {{$property->street_no}}</label><br>
                            </div>
                        <div class="flex-child">
                            <label for="fw-bold"> <b>District : </b> {{$property->district}}</label> <br>
                            <label for="fw-bold"> <b>Postal Code :</b>  {{$property->postal_code}}</label><br>
                            <label for="fw-bold"> <b>Ward Number :</b>  {{$property->ward_no}}</label><br>
                            <label for="fw-bold"> <b>Tole :</b>  {{$property->tole}}</label>
                        </div>
                    </div>
                </div>
            </div>
        
        <div style=" padding: 0px 20px 0px 30px;">
            <hr>
            <div class="flex-container">
                <div class="flex-child" style="width: 50px;">
                    <h2>About</h2>
                        <label for="fw-bold"> <b>Area :</b>  {{$property->area}}</label> <br>
                        @if($property->cate_id == "1")
                            
                        <label for="fw-bold"> <b>Price:</b> Rs {{$property->selling_rate}}</label><br>
                        @else
                            <label for="fw-bold"> <b>Structure Area :</b>  {{$property->structure_area}}</label> <br>
                            <label for="fw-bold"> <b>Structure Age:</b>  {{$property->structure_age}}</label><br>
                            <label for="fw-bold"> <b>Room Number :</b>  {{$property->room_no}}</label> <br>
                            <label for="fw-bold"> <b>Stories Number:</b>  {{$property->stories_no}}</label><br>
                        @endif
                    </div>
                    <div class="flex-child">
                        <h2>Surrounding</h2>
                        <label for="fw-bold"> <b>Road Length:</b>  {{$property->road_length}}</label><br>
                        <label for="fw-bold"> <b>Direction Faced :  {{$property->direction_faced}}</b>  </label><br>  
                    </div>
                    <div class="flex-child">
                        <h2>Facilities</h2>
                        <label for="fw-bold"> <b>Water Supply : </b> 
                            @if($property->water_supply == "1")
                                Yes
                            @else
                                No
                            @endif

                        </label> 
                        <br/>
                        <label for="fw-bold"> <b>Dranage System : </b> 
                            @if($property->drainage_system == "1")
                                Yes
                            @else
                                No
                            @endif

                        </label> 
                        <br/>
                        <label for="fw-bold"> <b>Electricity : </b> 
                            @if($property->electricity == "1")
                                Yes
                            @else
                                No
                            @endif

                        </label> 
                        <br/>
                        <label for="fw-bold"> <b>Public Transport : </b> 
                            @if($property->p_trasport == "1")
                                Yes
                            @else
                                No
                            @endif

                        </label> 
                        <br/>
                    </div>
                    <div class="flex-child">
                        <h2>Problems </h2>
                        <label for="fw-bold"> <b>High Tension Cables : </b> 
                            @if($property->hypertention == "1")
                                Yes
                            @else
                                No
                            @endif

                        </label> 
                        <br/>
                        <label for="fw-bold"> <b>River Side : </b> 
                            @if($property->hypertention == "1")
                                Yes
                            @else
                                No
                            @endif

                        </label> 
                    </div>
                </div>
                <hr>
                <div>
            <h2>Seller Info</h2><br>
            <label for="fw-bold"> <b>Seller Name: </b> {{$property->user->name}}</label> <br>
            <label for="fw-bold" style="text-transform: lowercase;"> <b>Seller Email: </b> {{$property->user->email}}</label> <br/>
                </div>
                <hr>
            <div  >
                <h2>More Images</h2>
                @foreach($images as $imgs)
                    @if($property->id === $imgs->property_id)
                        <img id="myImg" class="newImg"style="width:100%;max-width:300px" src="{{asset('assets/uploads/property/'. $imgs->image)}}" class="img-fluid rounded-start" alt="..."/>
                    @endif
                @endforeach
            </div>
            <div id="myModal" class="modal">
                <span class="close">&times;</span>
                <img class="modal-content" id="img01">
                <div id="caption"></div>
            </div>
            
        </div>
            </div>
        </div>
        </div>
                </div>
        </div>
    </form>   
</div>
@endsection
