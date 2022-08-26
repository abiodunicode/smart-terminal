<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">



    <title>{{ config('', 'SMART') }}</title>


    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">

    <style>
        .jumbotron {
            padding: 2rem 1rem;
            margin-bottom: 2rem;
            /* background-color: red; */
            /* border-radius: 0.3rem; */
            background-image: url('/images/bgn.jpg');
            background-size: 100% 100%;
            min-height: 100vh;
        }

        /* personal css */

        .navheader {

            display: flex;
            justify-content: center;

            max-height: 75px;
            background-color: rgb(77, 20, 140);


        }

        .box1 {
            width: 100px;
            height: 100px;
            background-color: white;
            text-align: center;
            justify-content: center;


        }

        .imageSect2 {
            width: 307px;
            width: 250px;


        }

        .imageSect {
            width: 30%;
            margin-bottom: 10px;
            align-items: center;

        }

        .custombtn {
            height: 120px;
            width: 120px;
            margin-left: -3px;
            margin-right: -3px;
            border: 5px solid rgb(224, 218, 218);
            background-color: rgb(77, 20, 140);
            color: white;
            border-radius: 0;
        }

        /* .navheader  a{

 color: white;
 font-size: 14px;
 font-family: 'Roboto', sans-serif;
 font-weight:400 ;
 line-height: 14px;


} */



        .bannerheader {
            /* color: white; */
            color: white;
            display: flex;
            justify-content: center;
            margin-top: 100px;
            text-align: center;
            flex-direction: column;


        }

        .bannerheader h1 {

            text-align: center;
            font-size: 55px;
            font-family: 'Roboto', sans-serif;
            font-weight: 300;
            line-height: 60px;

        }

        @media (min-width: 576px) {
            /* .jumbotron {
   padding: 4rem 2rem;
 } */
        }


        /* personal css */
    </style>
</head>

<body class=" ">

    <nav class="navbar navbar-expand-md navbar-dark  fixed-top" id="banner" style="background-color: rgb(77, 20, 140); color:white;">
        <div class="container">
            <!-- Brand -->
            <a class="navbar-brand" href="#"><span>SMART TERMINAL</span></a>

            <!-- Toggler/collapsibe Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a style="color: white;" class="nav-link" href="#"></a>
                    </li>
                    <li class="nav-item">
                        <a style="color: white;" class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a style="color: white;" class="nav-link" href="/search?query=000000">Tracking</a>
                    </li>
                    <li class="nav-item">
                        <a style="color: white;" class="nav-link" href="/login">Admin</a>
                    </li>
                    <li class="nav-item">
                        <a style="color: white;" class="nav-link" href="#">About</a>
                    </li>
                    <!-- Dropdown -->
                    <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                            Dropdown link
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" style="color: black;" href="#">Link 1</a>
                            <a class="dropdown-item" style="color: black;" href="#">Link 2</a>
                            <a class="dropdown-item" style="color: black;" href="#">Link 3</a>
                        </div>
                    </li> -->
                </ul>
            </div>
        </div>
    </nav>

    <div class="jumbotron">
        <div class="bannerheader">
            <div class="pt-5">
                <h1 style="text-align: center;">Innovative Technologies</h1>
                <h4 style="text-align: center;">Leading the industry with our portfolio of solutions and capabilities for the ocean supply chain</h4>
            </div>

            <!-- <div class="">
                <button type="button" class="btn btn btn-light btn-lg" style="height: 100px;width:120px;">RATE & SHIP</button>
                <a href='/search?query=000000'> <button type="button" href="" class="btn btn btn-light btn-lg custombtn" style="background-color: rgb(77, 20, 140); color:white;">TRACK</button></a>
                <button type="button" class="btn btn btn-light btn-lg" style="height: 100px;width:120px;">LOCATION</button>



            </div> -->

            <div class="" style="display: flex;justify-content:center;text-align:center; margin-top:10px;">
                <!-- <form class="form-inline">
          <input class="btntracking form-control " style="width:600px ;" type="search" placeholder="TRACKING ID" aria-label="Search">
          <button class="   btn btn-light btn-lg my-2 my-sm-0" type="submit">Search</button>
        </form> -->
            </div>

        </div>
    </div>

    <div class="container">
        <div class="col-md-12" style="text-align:center ;">
            <h2>Container Terminal Operation System</h2>

        </div>
        <!-- <div class="column">
          <img src="{{ asset('/images/icon_courier_purple_lg_1637809911.png') }}" alt="The Logo" class=" imageSect">
        </div> -->

        <div class="row">
            <div class="col-md-3 ">
                <div class=" mb-4 box-shadow align-items-center">
                    <img src="{{ asset('/images/icon_courier_purple_lg_1637809911.png') }}" alt="The Logo" class="mx-auto d-block imageSect">
                    <p style="text-align: center;">OPTIMISE YARD OPERATIONS</p>

                </div>
            </div>

            <div class="col-md-3 ">
                <div class=" mb-4 box-shadow align-items-center">
                    <img src="{{ asset('/images/icon_alert_purple_lg.png') }}" alt="The Logo" class="mx-auto d-block imageSect">
                    <p style="text-align: center;">OPERATIONAL VISIBILITY</p>

                </div>
            </div>

            <div class="col-md-3 ">
                <div class=" mb-4 box-shadow align-items-center">
                    <img src="{{ asset('/images/retail-services.svg') }}" alt="The Logo" class="mx-auto d-block imageSect">
                    <p style="text-align: center;">INCREASE PRODUCTIVITY</p>

                </div>
            </div>

            <div class="col-md-3 ">
                <div class=" mb-4 box-shadow align-items-center">
                    <img src="{{ asset('/images/icon_returns_purple_lg_1184917500.png') }}" alt="The Logo" class="mx-auto d-block imageSect">
                    <p style="text-align: center;">REDUCE COSTS.</p>

                </div>
            </div>

        </div>
    </div>

    <div class="container">
        <div class="col-md-12" style="text-align:center ;">

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h4>Inspiring inclusivity</h4>
                    <p class="lead">Learn about four winners of the 2021 BHL Small Business Grant Contest who are creating inclusive,
                        innovative products that help shine a light on underrepresented communities..</p>
                </div>
                <div class="col-md-5">
                    <img src="{{ asset('/images/browndages_727x463.jpg') }}" alt="The Logo" style="height: 248px;width: 426px;" class=" ">
                </div>
            </div>
        </div>



    </div>

    <div class="container" style="margin-top: 40px;">
        <div class="col-md-12" style="text-align:center ;">
            <h2>Capabilities and Features</h2>

        </div>
        <!-- <div class="column">
          <img src="{{ asset('/images/icon_courier_purple_lg_1637809911.png') }}" alt="The Logo" class=" imageSect">
        </div> -->

        <div class="row" style="margin-top: 20px;">
            <div class=" col-md-4 ">
                <div class=" mb-4 box-shadow align-items-center">
                    <img src="{{ asset('/images/fy22_england_42.jpg') }}" alt="The Logo" class="mx-auto d-block imageSect2">
                    <h5 style="text-align: center; font-size:20px; padding:10px;">
                        TLS (Terminal Logistics System)</h5>
                    <p style="text-align: center; font-size:16px;">
                        A total asset management system that streamlines equipment work queue based on individual workload
                </div>
            </div>



            <div class=" col-md-4 ">
                <div class=" mb-4 box-shadow align-items-center">
                    <img src="{{ asset('/images/Lorenzo_0889_fdi.jpg') }}" alt="The Logo" class="mx-auto d-block imageSect2">
                    <h5 style="text-align: center; font-size:20px; padding:10px;">
                        Advanced Vessel Planning
                    </h5>
                    <p style="text-align: center; font-size:16px;">
                        Measures operational priorities like IMDG and port of destination, it intelligently plan and assign containers into specific slots within the vessel.

                </div>
            </div>

            <div class=" col-md-4 ">
                <div class=" mb-4 box-shadow align-items-center">
                    <img src="{{ asset('/images/20160620_dm_16_004_02_02_07_128_160134.jpg') }}" alt="The Logo" class="mx-auto d-block imageSect2">
                    <h5 style="text-align: center; font-size:20px; padding:10px;">
                        Advanced Yard Allocation</h5>
                    <p style="text-align: center; font-size:16px;">
                        Container allocation within the yard is prioritized according to vessel’s stowage location, the yard’s work queue and available work tiers.
                </div>
            </div>

        </div>
    </div>

    <div class="container" style="padding: 20px;">
        <div class="col-md-12" style="text-align:center ;">

            <hr class="featurette-divider">

            <div class="row featurette">

                <div class="col-md-5">
                    <img src="{{ asset('/images/master-integer-1482-2032264.jpg') }}" alt="The Logo" style="height: 248px;width: 426px;" class=" ">
                </div>
                <div class="col-md-7">
                    <h4>Make Dad’s day</h4>
                    <p class="lead">With My BHL Rewards, your business can earn perks for every shipment celebrating dads, grads, and newlyweds this season. Sign up today to get started. ​​​​</p>
                </div>

            </div>
        </div>



    </div>

    <div class="container" style="padding: 20px;">
        <div class="col-md-12" style="text-align:center ;">



            <div class="row featurette">


                <div class="col-md-7">
                    <h4>Make Dad’s day</h4>
                    <p class="lead">Get all the important information and resources to make this Father’s Day special. We have the shipping services, deadlines, and packing solutions to help you or your business get gifts to dads by June 19. ​</p>
                </div>
                <div class="col-md-5">
                    <img src="{{ asset('/images/browndages_727x463.jpg') }}" alt="The Logo" style="height: 248px;width: 426px;" class=" ">
                </div>

            </div>
        </div>



    </div>

    <!-- Footer -->
    <footer class="page-footer font-small blue pt-4" style="background-color: rgb(77, 20, 140);">



        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© SMART TERMINAL 1995-2022
            <a href="/"></a>
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->





    <!-- @auth
  <script>
 window.user=@json(auth()->user())
  </script>
  @endauth -->
    <script src="{{ mix('/js/app.js') }}"></script>
</body>

</html>