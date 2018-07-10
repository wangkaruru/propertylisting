<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta name="description" content="MtaaPay">
<meta name="keywords" content="MtaaPay">
<meta name="author" content="MtaaPay">
<title>MtaaPay</title>
<link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png">
<link rel="shortcut icon" type="image/x-icon" href="app-assets/images/ico/favicon.ico">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Muli:300,400,500,700" rel="stylesheet">
<!-- BEGIN VENDOR CSS-->
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/vendors.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/forms/icheck/icheck.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/forms/icheck/custom.css')}}">
<!-- END VENDOR CSS-->
<!-- BEGIN ROBUST CSS-->
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/app.css')}}">
<!-- END ROBUST CSS-->
<!-- BEGIN Page Level CSS-->
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/core/menu/menu-types/vertical-menu.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/core/colors/palette-gradient.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/pages/login-register.css')}}">
<!-- END Page Level CSS-->
<!-- BEGIN Custom CSS-->
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/toastr.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
<!-- END Custom CSS-->
</head>
<body class="vertical-layout vertical-menu 1-column  bg-cyan bg-lighten-2 menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-col="1-column">



<!-- ////////////////////////////////////////////////////////////////////////////-->
<div class="app-content content">
<div class="content-wrapper">
<div class="content-header row">
</div>
<div class="content-body"><section class="flexbox-container">
<div class="col-12 d-flex align-items-center justify-content-center">
<div class="col-md-4 col-10 box-shadow-2 p-0">
<div class="card border-grey border-lighten-3 m-0">
<div class="card-header border-0">
<div class="card-title text-center">
<img src="app-assets/images/logo/pesatel.png" alt="branding logo">
</div>
<h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2"><span>Login with MtaaPay</span></h6>
</div>
<div class="card-content">
<div class="card-body">
<form class="form-horizontal" action="{{url('/')}}" method="post" novalidate>
	{{csrf_field()}}
   <div class="form-group">
  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
 </div>
<fieldset class="form-group position-relative has-icon-left">
<input type="email" class="form-control input-lg" id="user-name" name="email" placeholder="Email address" tabindex="1" required data-validation-required-message= "Please enter your email address">
<div class="form-control-position">
    <i class="ft-user"></i>
</div>
<div class="help-block text-danger font-small-3"></div>
</fieldset>
<fieldset class="form-group position-relative has-icon-left">
<input type="password" class="form-control input-lg" name="password" placeholder="Enter password" tabindex="2" required data-validation-required-message= "Please enter valid password">
<div class="form-control-position">
    <i class="fa fa-key"></i>
</div>
<div class="help-block text-danger font-small-3"></div>
</fieldset>
<div class="form-group row">
<div class="col-md-6 col-12 text-center text-md-left">
	<fieldset>
        <input type="checkbox" id="remember-me" class="chk-remember">
        <label for="remember-me"> Remember Me</label>
    </fieldset>
</div>
<div class="col-md-6 col-12 text-center text-md-right"><a href="{{url('/register')}}" class="card-link">Register</a></div>
</div>
<button type="submit" class="btn btn-success btn-block btn-lg"><i class="ft-unlock"></i> Login</button>
</form>
</div>
</div>

</div>
</div>
</div>
</section>
</div>
</div>
</div>
<!-- ////////////////////////////////////////////////////////////////////////////-->

<footer class="footer footer-static footer-light navbar-border">
<p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2">
<span class=" d-block d-md-inline-block">Copyright  &copy; {{date('Y')}} <a class="text-bold-800 grey darken-2" href="#" target="_blank">MTAAPAY </a>, All rights reserved. </span></p>
</footer>

<!-- BEGIN VENDOR JS-->
<script src="{{asset('app-assets/vendors/js/vendors.min.js')}}" type="text/javascript"></script>
<!-- BEGIN VENDOR JS-->
<!-- BEGIN PAGE VENDOR JS-->
<script src="{{asset('app-assets/vendors/js/forms/validation/jqBootstrapValidation.js')}}" type="text/javascript"></script>
<script src="{{asset('app-assets/vendors/js/forms/icheck/icheck.min.js')}}" type="text/javascript"></script>
<!-- END PAGE VENDOR JS-->
<!-- BEGIN ROBUST JS-->
<script src="{{asset('app-assets/js/core/add-menu.js')}}" type="text/javascript"></script>
<script src="{{asset('app-assets/js/core/add.js')}}" type="text/javascript"></script>
<script src="{{asset('app-assets/js/scripts/customizer.js')}}" type="text/javascript"></script>
<!-- END ROBUST JS-->
<!-- BEGIN PAGE LEVEL JS-->
<script src="{{asset('app-assets/js/scripts/forms/form-login-register.js')}}" type="text/javascript"></script>
  <script src="{{asset('assets/js/toastr.min.js')}}"></script>
<script>
toastr.options.closeButton = true;
  @if(Session::has('success'))
  toastr.success("{{ Session::get('success') }}");
  @endif


  @if(Session::has('info'))
  toastr.info("{{ Session::get('info') }}");
  @endif


  @if(Session::has('warning'))
  toastr.warning("{{ Session::get('warning') }}");
  @endif


  @if(Session::has('error'))
  toastr.error("{{ Session::get('error') }}");
  @endif


</script>
<!-- END PAGE LEVEL JS-->
</body>
</html>