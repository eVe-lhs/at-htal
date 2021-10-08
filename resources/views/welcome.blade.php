<!DOCtype html>
<html>
    <head>
        <title>
            At-Htal
        </title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="icon" 
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <style>
            body{
                background-attachment: fixed;
            }
            .bgimg{
	background: white;
	position: absolute;
	width:100%;
	height: 100%;
	
	bottom: 0;
	left: 0;
	right: 0;
            }
            .logo{
                position: absolute;
                top: 0;
                bottom: 0;
                left: 85;
                right: 0;
            }
            .loginbtn{
                background-color:black;
                opacity: 100%;
                color:white;
            }
            .loginbtn:hover{
                background-color: grey;
                opacity: 100%;
                color:white;
            }
            .container{
                position: absolute;
                top: 35%;
                left: 10%;
            }
            .text{
                font-size: 50px;
                font-family:Georgia, Times New Roman, Times, serif;
               color: black;
            }
            .navfade{
                opacity: 0;
                animation:fadeNav 1.5s ease-in-out forwards;
            }
            @keyframes fadeNav{
                0%{
                    opacity: 0;
                }
                100%{
                    opacity: 1;
                }
            }
            .leftfade{
                transform: translateX(-10%);
                margin-left: 70pt;
                opacity: 0;
                animation: leftfade 1s ease-in-out forwards;
                animation-delay: 1s;
            }
            @keyframes leftfade{
                0%{
                    transform: translateX(-10%);
                    opacity: 0;
                }
                100%{
                    transform: translateX(0);
                    opacity: 1;
                }
            }
            .rightfade{
                transform: translateX(10%);
                margin-left: 70pt;
                opacity: 0;
                animation: rightfade 1s ease-in-out forwards;
                animation-delay: 2s;
            }
            @keyframes rightfade{
                0%{
                    transform: translateX(10%);
                    opacity: 0;
                }
                100%{
                    transform: translateX(0);
                    opacity: 1;
                }
            }
            .bottonfade{
                transform: translateY(30%);                
                margin-left: 70pt;
                opacity: 0;
                animation: bottonfade 1s ease-in-out forwards;
                animation-delay: 3s;
            }
            @keyframes bottonfade{
                0%{
                    transform: translateY(30%);
                    opacity: 0;
                }
                100%{
                    transform: translateY(0);
                    opacity: 1;
                }
            }
        </style>
        <link rel="icon" type="image/png" href="{{ asset('external_files/home_page/images/logo.png') }}" sizes="50x20">
</head>
    <body>
<!-- Just an image -->
<div class="bgimg navfade"><img src="{{ asset('external_files/home_page/images/background1.jpg') }}" width="100%" height="100%"></div>
<nav class="navbar navbar-light nav-transparent navfade">
    
      <img class="logo rounded" src="{{ asset('external_files/home_page/images/logo.png') }}" width="142px" height="50px" alt="">
      
  </nav>
  <div class="container">
      <h1 class="leftfade text">AT-HTEL</h1>
      <h3 class="rightfade text">Believe In Your Creativity.</h3>
      <button class="btn mt-3 mr-5 btn-danger bottonfade" style="border-radius: 20px;"><a href="{{route('login')}}" style="color:white;">Get Started</a></button>
  </div>
    </body>
</html>