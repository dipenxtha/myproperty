<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<!--Side bar-->
<div class="sidebar"  >
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="sidebar-wrapper"  style="background-color:#0d1740;">
                <div class="logo" style="background-color:white;" >
                    <img src="{{URL::asset('assets/uploads/1.png')}}"  alt="My Property" style="height: 50px; ">
                  
                </div>
                <ul class="nav">
                    <li class="{{Request::is('dashboard') ? 'active': ''  }}">
                        <a class="nav-link" href="{{url('dashboard')}}">
                            <i class="fas fa-chart-line"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="{{ Request::is('catagories') ? 'active' : '' }}">
                        <a class="nav-link" href="{{url('catagories')}}">
                            <i class="fa fa-list-alt"></i> 
                            <p>Categories</p>
                        </a>
                    <li >

                    <li class="{{Request::is('add-catagory') ? 'active': ''  }}">
                        <a class="nav-link" href="{{url('add-catagory')}}">
                            <i class="fa fa-plus"></i> 
                            <p> Add Categories</p>
                        </a>
                    </li>

                    <li class="{{Request::is('verify-property') ? 'active': ''  }}">
                        <a class="nav-link" href="{{url('verify-property')}}">
                        <i class="fa fa-question-circle" style="font-size:30px"></i>
                            <p>Pending Verification</p>
                        </a>
                    </li>

                    <li class="{{Request::is('verified-property') ? 'active': ''  }}">
                        <a class="nav-link" href="{{url('verified-property')}}">
                        <i class="fas fa-clipboard-check"></i>
                            <p>Verified</p>
                        </a>
                    </li>

                    <li class="{{Request::is('add-rate') ? 'active': ''  }}">
                        <a class="nav-link" href="{{url('add-rate')}}">
                            <i class="fa fa-plus"></i> 
                            <p> Add Rating</p>
                        </a>    
                    </li>

                    <li class="{{Request::is('rating') ? 'active': ''  }}">
                        <a class="nav-link" href="{{url('rate')}}">
                        <i class="fas fa-hand-holding-usd"></i>
                            <p>Rating</p>
                        </a>
                    </li>
                
                </ul>
            </div>
        </div>
        <!--End Side Bar-->