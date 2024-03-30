@extends('layouts.front')
@section('title')
    
@endsection
@section('content')
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<style>
    a{
        text-decoration: none;
    }
    a:hover {
  color: white;
  text-decoration: none;
  cursor: pointer;
}

</style>
<body>

    <div class="wrapper" >   
        <div class="sidebar" data-image="../assets/img/sidebar-5.jpg">
            <div class="sidebar-wrapper" style="background-color: #0d1740;">
               <h3>Property Type</h3>
               <ul class="nav">
                 @foreach($catagory as $cat)
                 
                    <li class="{{Request::is('$cat->type') ? 'active': ''  }}">
                        <a class="nav-link" href="{{ url('view-property/'.$cat->type) }}">
                            <i class="fas fa-chart-line"></i>
                            <p>{{$cat->type}}</p>
                        </a>
                    </li>
                @endforeach
               
            </div>
        </div>
        
            <div class="main-panel">
                <div class="content">
                <div class="py-5">
                    <div class="container">
                        <div class="row">
                           <h2 style="text-align: center;">Available Properties</h2>
                            @foreach($property as $prop)
                                @if( $prop->verification == "1" )
                                    <div class="col-md-3 mt-5">
                                    <div class="item"  >
                                        <div class="card" >
                                            <img src="{{asset('assets/uploads/property/'. $prop->image)}}" alt="Property Image" style="height: 150px; width: auto; ">
                                            <div class="card-body" style="color: black; ">
                                                <h6> <i class="fa fa-map-pin"></i> {{$prop->tole}}, {{$prop->city}}</h6>
                                                <small><i class="fa fa-money"></i>&nbsp;&nbsp;&nbsp;Rs {{$prop-> selling_rate}}</small> <br><br>
                                                <a href="{{url('view-property/'.'/'.$prop->id)}}" class="btn btn-primary" style="display:inline-block; width: 120px; background-color: #42d7f5;">View More</a>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                    @endif
                                @endforeach
                            
                        </div>
                    </div>
    </div>
                </div>
            </div>
    </div>

</body>

@endsection