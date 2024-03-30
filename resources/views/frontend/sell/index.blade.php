@extends('layouts.front')

@section('content')
    <div class="card" style="width: 2500px;">
        <div class="cardheader">
            <br>
            <h4>My Property Uploads Page </h4>
         
        </div>

        <div class="card-body">

            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Catagory <br> Name</th>
                        <th>Provience</th>
                        <th>District</th>
                        <th>Postal <br> Code</th>
                        <th>City</th>
                        <th>Ward <br> Number </th>
                        <th>Tole</th>
                        <th>Street <br> Name</th>
                        <th>Area</th>
                        <th>Road <br> Length</th>
                        <th>Description</th>
                        <th>Selling <br> Rate</th>
                        <th>Image</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($property as $item)
                    @if($item->verification==1 && $item ->user_id == Auth::user()->id)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->catagory->type }}</td>
                        <td>{{ $item->provience }}</td>
                        <td>{{ $item->district }}</td>
                        <td>{{ $item->postal_code }}</td>
                        <td>{{ $item->city }}</td>
                        <td>{{ $item->ward_no }}</td>
                        <td>{{ $item->tole }}</td>
                        <td>{{ $item->street_no }}</td>
                        <td>{{ $item->area }}</td>
                        <td>{{ $item->road_length }}</td>
                        <td>{{ $item->discription }}</td>
                        <td>{{ $item->selling_rate }}</td>
                        <td>
                            <img src="{{ asset('assets/uploads/property/'. $item->image )}}" class="pro_img" alt="Image Here">  
                        </td>
                        <td>
                            <a href="{{url('edit-cus-prop/'.$item->id)}}" class="btn btn-primary">Edit</a>
                            <a href="{{url('delete-cus-prop/'.$item->id)}}" class="btn btn-primary">Delete</a>
                        </td>
                    </tr>
                    @endif
                    @endforeach
                </tbody>
            
            </table>

        </div>
    </div>
@endsection