@extends('master')

@section('content')

<style>
    /* width */
    ::-webkit-scrollbar {
      width: 6px;
    }
    
    /* Track */
    ::-webkit-scrollbar-track {
      box-shadow: inset 0 0 5px rgb(219, 216, 216); 
      border-radius: 10px;
    }
        
    /* Handle */
    ::-webkit-scrollbar-thumb {
      background: rgb(184, 183, 183); 
      border-radius: 10px;
    }
    
    /* Handle on hover */
    ::-webkit-scrollbar-thumb:hover {
      background: rgb(184, 183, 183); 
    }
    </style>

<style>
    .btn1{
        border-radius: 6px;
        width: 250px;
        height: 50px;
    }
</style>


<div class="col-xl-4 col-md-12">
    <div class="card" style="box-shadow: 10px 10px 10px rgba(0,0,0,0.5);height:300px">
        <div class="card-header" style="background-color: black">
            <div class="row align-items-center">
                <div class="col-9">
                    <h5 class="text-white m-b-0" text-center>Mechanical Assesments</h5>
                </div>
                <div class="col-3 text-right">
                    <i class="fa fa-gifts text-white f-16"></i>
                </div>
            </div>

        </div>
        <div class="card-block">
            <div class="row align-items-center">
                <div class="col-12">
                    <h4 class="text-c-purple">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRQzf6WJmtziJty1xE07LKk5be99FKqkCtvHQ&s" width="280px" height="180px" alt="">
                    </h4>
                    <h6 class="text-muted m-b-0"></h6>
                </div>
               
            </div>
        </div>
    </div>
</div>

<div class="col-xl-4 col-md-12">
    <div class="card" style="box-shadow: 10px 10px 10px rgba(0,0,0,0.5);height:300px">
        <div class="card-header" style="background-color: black">
            <div class="row align-items-center">
                <div class="col-9">
                    <h5 class="text-white m-b-0">Civil Assesments</h5>
                </div>
                <div class="col-3 text-right">
                    <i class="fa fa-gifts text-white f-16"></i>
                </div>
            </div>

        </div>
        <div class="card-block">
            <div class="row align-items-center">
                <div class="col-12">
                    <h4 class="text-c-purple">
                        <img src="https://s3-ap-south-1.amazonaws.com/ricedigitals3bucket/AUPortalContent/2022/12/19130644/New-Challenges-and-Opportunities-in-Civil-Engineering-during-Post-Pandemic-1.png" width="280px" height="180px" alt="">
                    </h4>
                    <h6 class="text-muted m-b-0"></h6>
                </div>
               
            </div>
        </div>
    </div>
</div>

<div class="col-xl-4 col-md-12">
    <div class="card" style="box-shadow: 10px 10px 10px rgba(0,0,0,0.5);height:300px">
        <div class="card-header" style="background-color: black">
            <div class="row align-items-center">
                <div class="col-9">
                    <h5 class="text-white m-b-0">Electrical Assesments</h5>
                </div>
                <div class="col-3 text-right">
                    <i class="fa fa-gifts text-white f-16"></i>
                </div>
            </div>

        </div>
        <div class="card-block">
            <div class="row align-items-center">
                <div class="col-12">
                    <h4 class="text-c-purple">
                        <img src="https://thumbs.dreamstime.com/b/hand-electrician-multimeter-probe-electrical-sw-37645518.jpg" width="280px" height="180px" alt="">
                    </h4>
                    <h6 class="text-muted m-b-0"></h6>
                </div>
               
            </div>
        </div>
    </div>
</div>

<div class="col-xl-4 col-md-12">
    <div class="card" style="box-shadow: 10px 10px 10px rgba(0,0,0,0.5);height:300px">
        <div class="card-header" style="background-color: black">
            <div class="row align-items-center">
                <div class="col-9">
                    <h5 class="text-white m-b-0">Electronics Assesments</h5>
                </div>
                <div class="col-3 text-right">
                    <i class="fa fa-gifts text-white f-16"></i>
                </div>
            </div>

        </div>
        <div class="card-block">
            <div class="row align-items-center">
                <div class="col-12">
                    <h4 class="text-c-purple">
                        <img src="https://t3.ftcdn.net/jpg/02/57/16/84/360_F_257168460_AwhicdEIavp7bdCbHXyTaBTHnBoBcZad.jpg" width="280px" height="180px" alt="">
                    </h4>
                    <h6 class="text-muted m-b-0"></h6>
                </div>
               
            </div>
        </div>
    </div>
</div>



<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    
      

@endsection
