@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3>Verify Page</h3>
            <hr>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>User ID</th>
                            <th>Category Name</th>
                            <!-- Add other headers as needed -->
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($property as $item)
                            @if($item->verification == 0)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->user_id }}</td>
                                    <td>{{ optional($item->category)->type }}</td> <!-- Safely access category type -->
                                    <!-- Add other columns as needed -->
                                    <form action="{{ url('verify-prop/'.$item->id) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <td>
                                            <!-- Action textarea with placeholder -->
                                            <textarea name="reason" id="reason" cols="30" rows="3" placeholder="The reason for your action"></textarea>
                                        </td>
                                        <td>
                                            <div class="btn-group" role="group">
                                                <button type="submit" name="verify" class="btn btn-success">Verify</button>
                                                <button type="submit" name="reject" class="btn btn-danger">Reject</button>
                                                <!-- Additional button for accepting the property -->
                                                <button type="submit" name="accept" class="btn btn-primary">Accept</button>
                                            </div>
                                        </td>
                                    </form>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
