@extends('layouts.admin')

@section('content')

<P>Images of Property ID : {{$property->id}}</p>

@foreach($images as $imgs)
     @if($property->id === $imgs->property_id)
         <img id="myImg" class="newImg"style="width:100%;max-width:300px" src="{{asset('assets/uploads/property/'. $imgs->image)}}" class="img-fluid rounded-start" alt="..."/>
    @endif
 @endforeach 
 <br/>
 <br/>
 <br/>
 <a href="{{url('view-prop-back')}}" class="btn btn-primary">Back</a> &nbsp;
 <div id="myModal" class="modal">
                <span class="close">&times;</span>
                <img class="modal-content" id="img01">
                <div id="caption"></div>
            </div>
 @endsection  