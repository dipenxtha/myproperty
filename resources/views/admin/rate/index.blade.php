@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="cardheader">
            <h3>Rate Page </h3>
            <hr>
        </div>

        <div class="card-body">

            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Provience</th>
                        <th>District</th>
                        <th>Postal Code</th>
                        <th>City </th>
                        <th>Ward Number</th>
                        <th>Tole</th>
                        <th>Street Number</th>
                        <th>Market Rate</th>
                        <th>Distress Value</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($rate as $item)

                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->provience }}</td>
                        <td>{{ $item->district }}</td>
                        <td>{{ $item->postal_code }}</td>
                        <td>{{ $item->city }}</td>
                        <td>{{ $item->ward_no }}</td>
                        <td>{{ $item->tole }}</td>
                        <td>{{ $item->street_no }}</td>
                        <td>{{ $item->max_rate }}</td>
                        <td>{{ $item->min_rate }}</td>

                        
                        <td>
                            <a href="{{url('edit-rate/'.$item->id)}}" class="btn btn-primary">Edit</a>
                            <a href="{{url('delete-rate/'.$item->id)}}" class="btn btn-primary">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            
            </table>

        </div>
    </div>
@endsection