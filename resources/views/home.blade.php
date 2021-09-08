{{-- @extends('layouts.app') --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Electronic Document Management System</title>

    <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('css/custom2.css')}}" rel="stylesheet">
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('css/custom.css')}}"> --}}
</head>
<body class="home-bg">
    <div class="container-fluid">
        <div class="row vh-100">
            <div class="col">
                <div class="square one"></div>
                <div class="square two"></div>
                <div class="square three"></div>
                <div class="h-100 d-flex align-items-center justify-content-center">
                    <div class="d-flex flex-column">
                        <div class="pr-3 pl-3 pb-1 pt-5">
                            <h1 class="home-apptitle-full text-center text-md-left  d-none d-md-block d-md-none">Electronic Document<br> Management System Core</h1>
                            <h1 class="home-apptitle-acr text-center text-md-left d-block d-xs-block d-md-none">EDMS</h1>
                        </div>
                        <div class="pr-3 pl-3 pb-2">
                           <p class="font-weight-bold text-center text-md-left" >EDMS Central Core V1</p>
                        </div>
                        <div class="pr-3 pl-3 pb-2">
                                <p class="home-features text-center text-md-left">   Scanning  &middot; OCR   &middot;  Retention  &middot;  Registrations     &middot;   Verifications  </p>
                        </div>
                        <div class="pr-3 pl-3 pb-2 text-center text-md-left">
                           <a href="{{ route('dashboard') }}">
                            <button type="button" class="btn btn-outline-success home-launch">Launch EDMS Core</button>
                            </a>
                        </div>
                        <div>
                            <br>
                        </div>
                        <p class="subtitle pt-5 text-center text-md-left pr-3 pl-3 pb-2 ">Copyright &copy; <?php echo date("Y"); ?>. ELEVATE. All Rights Reserved.</p>

                    </div>

            </div>
            </div>
            <div class="col d-none d-sm-block d-md-block d-lg-block ">
                <div class="shape"></div>
                    <div class="shape two"></div>
                    <div class="square four"></div>
                   <div class="home-pattern"></div>
                </div>
            </div>
       </div>
    </div>
</body>
</html>
