
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INSPINIA | Login</title>

    <link href={{asset("assets/css/bootstrap.min.css")}} rel="stylesheet">
    <link href={{asset("assets/font-awesome/css/font-awesome.css")}} rel="stylesheet">

    <link href={{asset("assets/css/animate.css")}} rel="stylesheet">
    <link href={{asset("assets/css/style.css")}} rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen animated fadeInDown">
        
        <div>
            <div>

                <h1 class="logo-name">CMS</h1>

            </div>
            <h3>WELCOME TO CODINGINAJA</h3>
            <p>Perfectly designed and precisely prepared admin theme with over 50 pages with extra new web app views.
                <!--Continually expanded and constantly improved Inspinia Admin Them (IN+)-->
            </p>
            <p>Login in. To see it in action.</p>

            @if(Session::has('message'))
                <div class="alert alert-danger" role="alert">
                    {{Session::get('message')}}
                </div>
            @endif
            
            <form method="POST" action="{{url('login/prosses')}}">
                @csrf
                <div class="form-group">
                    <input name="email" id="email" type="email" class="form-control" placeholder="email" required="">
                </div>
                <div class="form-group">
                    <input name="password" id="password" type="password" class="form-control" placeholder="Password" required="">
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b form-control">Login</button>

                {{-- <a href="#"><small>Forgot password?</small></a>
                <p class="text-muted text-center"><small>Do not have an account?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="register.html">Create an account</a> --}}
            </form>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src={{asset("assets/js/jquery-3.1.1.min.js")}}></script>
    <script src={{asset("assets/js/bootstrap.min.js")}}></script>

</body>

</html>
