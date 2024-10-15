@extends('master')

@section('content')
    <style>
        @import url('https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            list-style: none;
            font-family: 'Josefin Sans', sans-serif;
        }

        body {
            background-color: #f3f3f3;
        }

        .wrapper {
            position: absolute;
            top: 380%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 950px;
            display: flex;
            box-shadow: 10px 10px 10px rgba(0, 0, 0, 0.5)
        }

        .wrapper .left {
            width: 35%;
            background: linear-gradient(to right, #448aff, #448aff);
            padding: 30px 25px;
            border-top-left-radius: 5px;
            border-bottom-left-radius: 5px;
            text-align: center;
            color: #fff;
        }

        .wrapper .left img {
            border-radius: 5px;
            margin-bottom: 10px;
        }

        .wrapper .left h4 {
            margin-bottom: 10px;
        }

        .wrapper .left p {
            font-size: 12px;
        }

        .wrapper .right {
            width: 65%;
            background: #fff;
            padding: 30px 25px;
            border-top-right-radius: 5px;
            border-bottom-right-radius: 5px;
        }

        .wrapper .right .info,
        .wrapper .right .projects {
            margin-bottom: 25px;
        }

        .wrapper .right .info h3,
        .wrapper .right .projects h3 {
            margin-bottom: 15px;
            padding-bottom: 5px;
            border-bottom: 1px solid #e0e0e0;
            color: #353c4e;
            text-transform: uppercase;
            letter-spacing: 5px;
        }

        .wrapper .right .info_data,
        .wrapper .right .projects_data {
            display: flex;
            justify-content: space-between;
        }

        .wrapper .right .info_data .data,
        .wrapper .right .projects_data .data {
            width: 45%;
        }

        .wrapper .right .info_data .data h4,
        .wrapper .right .projects_data .data h4 {
            color: #353c4e;
            margin-bottom: 5px;
        }

        .wrapper .right .info_data .data p,
        .wrapper .right .projects_data .data p {
            font-size: 13px;
            margin-bottom: 10px;
            color: #919aa3;
        }

        .wrapper .social_media ul {
            display: flex;
        }

        .wrapper .social_media ul li {
            width: 45px;
            height: 45px;
            margin-right: 10px;
            border-radius: 5px;
            text-align: center;
            line-height: 45px;
        }

        .wrapper .social_media ul li a {
            color: #fff;
            display: block;
            font-size: 18px;
        }
    </style>

    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

    <div class="wrapper">
        <div class="left">
            <img src="https://cdn.pixabay.com/photo/2020/07/01/12/58/icon-5359553_640.png" alt="user" width="160">
            <h2>{{ $user_data->name }}</h2>
            <h4>{{ $user_data->user_type }}</h4>
        </div>
        <div class="right">
            <div class="info">
                <h3><b style="font-weight: bold">User Profile</b></h3>
                <div class="info_data">
                    <div class="data">
                        <h4>Email</h4>
                        <p style="color: black">{{ $user_data->email }}</p>
                    </div>
                    <div class="data">
                        <h4>User ID</h4>
                        <p style="color: black">{{ $user_data->s_number }}</p>
                    </div>
                </div>
            </div>

            <div class="projects">
                <h3>Projects</h3>
                <div class="projects_data">
                    <div class="data">
                        <h4>Uploaded Assesments</h4>
                        <p style="color: black">No Avaliable.</p>
                    </div>
                    <div class="data">
                        <h4>Reviewed Assesments</h4>
                        <p style="color: black">No Avaliable.</p>
                    </div>
                </div>
            </div>

            <div class="social_media">
                <ul>
                    <li style="background: linear-gradient(to right, #448aff, #448aff);"><a href="www.facebook.com"> <i class="fab fa-facebook-f"></i></a></li>
                    <li style="background-color:#1da1f2"><a href="www.twitter.com"><i class="fab fa-twitter" ></i></a></li>
                    <li style="background: linear-gradient(115deg, #f9ce34, #ee2a7b, #6228d7);"><a href="www.instagram.com"><i class="fab fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
@endsection
