@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="cardheader">
            <h3>Category Page </h3>
            <hr>
        </div>

        <div class="card-body">

            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Type</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($catagory as $item)

                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->type }}</td>
                        <td>{{ $item->discription }}</td>
                        <td>
                            <img src="{{ asset('assets/uploads/catagory/'. $item->image )}}" class="pro_img" alt="Image Here">  
                        </td>
                        <td>
                            <a href="{{url('edit-prop/'.$item->id)}}" class="btn btn-primary">Edit</a>
                            <a href="{{url('delete-prop/'.$item->id)}}" class="btn btn-primary">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            
            </table>

        </div>
    </div>
@endsection