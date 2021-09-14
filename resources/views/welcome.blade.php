<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Electronic Document Management System</title>

    <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('css/custom2.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/custom.css')}}">
    <link rel="shortcut icon" href="{{ asset('images/logo.png') }}" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
        integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
        crossorigin="anonymous" />

    <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css"
        rel="stylesheet">

    <!-- AdminLTE -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.0.5/css/adminlte.min.css"
        integrity="sha512-rVZC4rf0Piwtw/LsgwXxKXzWq3L0P6atiQKBNuXYRbg2FoRbSTIY0k2DxuJcs7dk4e/ShtMzglHKBOJxW8EQyQ=="
        crossorigin="anonymous" />

    <!-- iCheck -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/icheck-bootstrap/3.0.1/icheck-bootstrap.min.css"
        integrity="sha512-8vq2g5nHE062j3xor4XxPeZiPjmRDh6wlufQlfC6pdQ/9urJkU07NM0tEREeymP++NczacJ/Q59ul+/K2eYvcg=="
        crossorigin="anonymous" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css"
        integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw=="
        crossorigin="anonymous" />

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css"
        integrity="sha512-aEe/ZxePawj0+G2R+AaIxgrQuKT68I28qh+wgLrcAJOz3rxCP+TwrK5SPN+E5I+1IQjNtcfvb96HDagwrKRdBw=="
        crossorigin="anonymous" />
</head>
<body class="home-bg ">
    <div class="container-fluid home-bg2">
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
                           <a href="{{ route('home') }}">
                            <button type="button" class="btn btn-outline-success home-launch">Launch EDMS Core</button>
                            </a>
                        </div>
                        <div>
                            <br>
                        </div>
                        <p class="subtitle pt-5 text-center text-md-left pr-3 pl-3 pb-2 "><strong>Copyright &copy; <?php echo date("Y"); ?>. EDMS. All Rights Reserved.</strong></p>

                    </div>

                </div>
            </div>
            <div class="col d-none d-sm-block d-md-block d-lg-block ">
                <div class="shape"></div>
                    <div class="shape two"></div>
                    <div class="square four"></div>
                   <div class="home-welcome" ></div>
                </div>
            </div>
       </div>
    </div>
</body>
</html>
