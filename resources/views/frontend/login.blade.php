<!DOCTYPE html>
<html lang="en-US">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Meta World - Login</title>
<link href="{{asset('/assets/css/bootstrap.css')}}" rel="stylesheet">
<link rel='stylesheet' href='{{asset('assets/css/style.css')}}' type='text/css'/>
<link rel='stylesheet' href='{{asset('assets/css/datatable.css')}}' type='text/css'/>
<link rel='stylesheet' href='{{asset('assets/css/toastr.css')}}' type='text/css'/>
</head>
<body>
<div class="register-main">
  <div class="container">
    <div class="login-outer">
      <div class="logo-outer">
        <a href="{{url('/')}}">
          <img src="{{asset('/assets/images/logo.png')}}" alt="" class="img-fluid"/>
        </a>
      </div>
      <div class="register-tabs">
        <nav>
          <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <button class="nav-link {{!isset($referral) || empty($referral)?'active':''}}" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Login</button>
            <button class="nav-link  {{isset($referral) && !empty($referral)?'active':''}}" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Register</button>
          </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
          <div class="tab-pane fade {{!isset($referral) || empty($referral)?'active show':''}}" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
            <div class="connect-btn">
              <button id="login"  class="btn btn-primary w-100">Connect Wallet</button>
            </div>
          </div>
          <div class="tab-pane fade {{isset($referral) && !empty($referral)?'active show':''}}" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
            <form class="register-form">
              <div class="form-group">
                <label>Referral Code</label>
                <input type="text"  placeholder="Refferal Code" class="form-control" {{isset($referral) && !empty($referral)?'disabled':''}} value="{{isset($referral) && !empty($referral)?$referral:''}}" minlength="9" maxlength="9" id="referral"/>
                <span id="referral-err" class="text-danger"></span>
              </div>
              <div class="register-btn">
                <button type="button" class="btn btn-primary w-100" id="register-btn">Register</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="{{asset('assets/js/jquery.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.js')}}"></script>
<script src="{{asset('assets/js/datatable.js')}}"></script>
<script src="{{asset('assets/js/toastr.js')}}"></script>
<script src="{{asset('assets/js/web3.js')}}"></script>
<script src="{{asset('assets/js/login-register.js?').time()}}"></script>

@if (Session::has('success'))
<script>
    toastr.success("{{Session::get('success')}}");
</script>
@endif
@if (Session::has('error'))
<script>
    toastr.error("{{Session::get('error')}}");
</script>
@endif
</body>
</html>
