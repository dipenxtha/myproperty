@extends('layouts.front')
@section('title')
@endsection
@section('content')

<style>
   h2{
       text-align: center;
   }

    @media screen and (max-width: 600px) {
        .imageDisplay {
        display: none;
    }
    p{
        font-size: 20px;
    }
    p.down{
        font-size: 13px; 
    }
        
}
</style>
<div style="height: 700px; width: 100%; ">
	<div style="height: 50%;  float: left;">
	    <div class="icons" >
		    <a href="http://www.facebook.com" class="facebook">Facebook &ensp;<img class="imag" style="height: 20px; width: 20px; margin-top: 1px" src="{{URL::asset('assets/images/fb.png')}}"></a>
			<a href="http://www.instagram.com"class="instagram">Instagram &ensp;<img class="imag" style="height: 20px; width: 20px; margin-top: 1px" src="{{URL::asset('assets/images/ig.png')}}"> </a>
			<a href="http://www.linkedin.com" class="linkdin">LinkdIn &ensp;<img class="imag" style="height: 20px; width: 20px; margin-top: 1px" src="{{URL::asset('assets/images/in.png')}}"> </a>
			<a href="http://www.whatsapp.com"class="whatsapp">Whatsapp &ensp;<img class="imag" style="height: 20px; width: 20px; margin-top: 1px" src="{{URL::asset('assets/images/wa.png')}}"> </a>
            <a href="http://www.tweeter.com"class="twiter">Twiter &ensp;<img class="imag" style="height: 20px; width: 20px; margin-top: 1px" src="{{URL::asset('assets/images/tw.png')}}"> </a>
		</div>
    </div>
    <div style="margin-left: 100px; float:right; height: auto; width: auto; margin-top:40px; margin-right: 70px; ">
        
            <img class="imageDisplay" src="{{URL::asset('assets/images/as.png')}}" style="height: 400px; width: 500px;" >
    </div>
   
	<div style="margin-left: 70px; border-radius: 25px; height: 50%; width: 450px; margin-top: 20px; border-style:groove; background-color:#ededed;">
	<h2 >Who are we </h2>
    <p style="padding-left: 10px; padding-right: 10px;">
    &nbsp;We are known as a platfrom for users to upload multiple properties for selling and buying. We have been and will serve our user loyaly 
    for the bettermnet of market of real estate as well as for the people using it. We gurentee to provide the most unique feature to our client for 
    thier full facilities. 
    </p>
	</div>
    <div  style="margin-left: 70px;  border-radius: 25px; float:left; height: 50%; width: 30%; margin-top:40px;  background-color: #15434d">
        <div>
            <img class="imgPerson" src="{{URL::asset('assets/images/Founder.png')}}" alt="Founder" style="border-radius:50%; height: 100px; width: 100px; margin-left:20px; margin-top:20px;">
            <br>
            <br>
            <h5 style="margin-left:10px; color:white;">Founder: Mr Diwash Bikram Shah </h5>
            <p style=" margin-left:10px; color:white; font-size:17px">Real Estate Agent</p>  
            <p  style="margin-left:10px ;margin-right:10px; font-size:smaller; color:white;">
                Have been working as real estate agent for 5 years and also known as Entrepreneur
            </p>

        </div>

    </div>
    <div style="height: 40%; border-radius: 25px; width:50%; float:right; margin-right: 20px; margin-top: 60px; border-style:groove; background-color:#ededed;">
    <h2>What do we do </h2>
    <p class="down" style="padding-left: 10px; padding-right: 10px;"> &nbsp; We are non-profitable service based wesite to serve nation wide customer to find a perfect key in your hands. 
        We belive serving users and satifing them are our prorities and are glad to add up this website just to serve you. This a platform for all 
        the to have a safe, convient and unique site for you to use. We have been serving you in person by the time but now we are here to serve you technically
        as well.  </p>
    </div>
</div>
@endsection