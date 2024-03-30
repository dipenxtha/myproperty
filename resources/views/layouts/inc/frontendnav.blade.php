<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #dfe0e1;
}

.topnav a {
  float: left;
  display: block;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #707070;
  color: black;
  border-radius: 5px;
  transition: 1s;
}


.topnav a.active {
  background-color: #707070;
  margin-bottom: 5px;
  margin-top: 10px;
  height: 50px;
  border-radius: 5px;
}


.topnav .icon {
  display: none;
}


@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}
</style>
</head>
<body>

<div class="topnav" id="myTopnav">
<a class="navbar-brand" href="{{url('/')}}">
                    <img src="{{URL::asset('assets/uploads/1.png')}}"  alt="My Property" style="height: 50px; ">
</a>
@if (Route::has('login'))
                    @auth
                    <a class="{{ Request::is('/') ? 'active' : '' }}"  href="{{url('/')}}">Home</a>
                    <a class="{{ Request::is('buy-property') ? 'active' : '' }}"  href="{{url('buy-property')}}">Buy</a>
                    <a class="{{ Request::is('add-property') ? 'active' : '' }}"  href="{{url('add-property')}}">Sell</a>
                    <a  class="{{ Request::is('compare-property') ? 'active' : '' }}" href="{{url('compare-property')}}">Compare</a>
                    <a class="{{ Request::is('valuate-property') ? 'active' : '' }}" href="{{url('valuate-property')}}">Valuate</a></li>
                    <a class="{{ Request::is('about') ? 'active' : '' }}"  href="{{url('about')}}">About Us</a></li>
                        <a class="{{ Request::is('property') ? 'active' : '' }}" href="{{url('property')}}">
                            {{ Auth::user()->name }}
                        </a>
                           <a class="{{ Request::is('logout') ? 'active' : '' }}" href="{{ route('logout') }}"
                              onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                               {{ __('Logout') }}
                           </a>

                           <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                               @csrf
                            </form>  
                   
                   <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                        <i class="fa fa-bars"></i>
                    </a>

                    @else
                       <a href="{{ route('login') }}" >Log in</a>
                       <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                        <i class="fa fa-bars"></i>
                    </a>
                        @if (Route::has('register'))
                         <a href="{{ route('register') }}" >Register</a>
                    </a>
                        @endif
                    @endauth
               
                @endif
  
</div>



<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>

</body>
</html>
