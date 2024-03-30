@extends('layouts.admin')

@section('content')
    <div class="card" style="width: 3000px;">
        <div class="cardheader">
            <h4>Verified Page </h4>
            <hr>
        </div>

        <div class="card-body">

            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>User ID</th>
                        <th>Catagory Name</th>
                        <th>Provience</th>
                        <th>District</th>
                        <th>Postal Code</th>
                        <th>City</th>
                        <th>Ward Number</th>
                        <th>Tole</th>
                        <th>Street Number</th>
                        <th>Road Length</th>
                        <th>Road Type</th>
                        <th>Structure Area</th>
                        <th>Stories Number</th>
                        <th>Structure Age</th>
                        <th>Room Number</th>
                        <th>Direction Faced</th>
                        <th>Area</th>
                        <th>Hypertension</th>
                        <th>River Side</th>
                        <th>Water Supply</th>
                        <th>Drainage</th>
                        <th>Electricity</th>
                        <th>Public Transport</th>
                        <th>Description</th>
                        <th>Selling Rate</th>
                        <th>Image</th>
                        <th>Action</th>
                        <th>Images</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($property as $item)
                    @if($item->verification==1)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->user_id }}</td>
                        <td>{{ $item->catagory->type }}</td>
                        <td>{{ $item->provience }}</td>
                        <td>{{ $item->district }}</td>
                        <td>{{ $item->postal_code }}</td>
                        <td>{{ $item->city }}</td>
                        <td>{{ $item->ward_no }}</td>
                        <td>{{ $item->tole }}</td>
                        <td>{{ $item->street_no }}</td>
                        <td>{{ $item->road_length }}</td>
                        <td>{{ $item->road_type }}</td>
                        <td>{{ $item->structure_area }}</td>
                        <td>{{ $item->stories_no }}</td>
                        <td>{{ $item->structure_age }}</td>
                        <td>{{ $item->room_no }}</td>
                        <td>{{ $item->direction_faced }}</td>
                        <td>{{ $item->area }}</td>
                        <td>{{ $item->hypertension }}</td>
                        <td>{{ $item->river_side }}</td>
                        <td>{{ $item->water_supply }}</td>
                        <td>{{ $item->drainage }}</td>
                        <td>{{ $item->electricity }}</td>
                        <td>{{ $item->p_transport }}</td>
                        <td>{{ $item->discription }}</td>
                        <td>{{ $item->selling_rate }}</td>
                        <td>
                            <img src="{{ asset('assets/uploads/property/'. $item->image )}}" class="pro_img" alt="Image Here">  
                        </td>
                
                        <td>
                            <a href="{{url('remove-verified-prop/'.$item->id)}}" name="reject" class="btn btn-primary">Remove</a>
                        </td>
                        <td>   
                            <a href="{{url('view-prop-image/'.$item->id)}}" class="btn btn-primary">View <br/>Image</a> &nbsp;
                        </td>
                    </tr>
                    
                    @endif
                    @endforeach
                </body>
            
            </table>

        </div>
    </div>
@endsection    

