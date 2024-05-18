<!DOCTYPE html>
<html lang="en-US">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Meta World - Login</title>
<link href="{{asset('/assets/css/bootstrap.css')}}" rel="stylesheet">
<link rel='stylesheet' href='{{asset('assets/css/style.css')}}' type='text/css'/>
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
            <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Login</button>
            <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Register</button>
          </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
          <div class="tab-pane fade active show" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
            <div class="connect-btn">
              <a href="dashboard/index.html" class="btn btn-primary w-100">Connect Wallet</a>
            </div>
          </div>
          <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
            <form class="register-form">
              <div class="form-group">
                <label>Sponser ID</label>
                <input type="text" name="" placeholder="Refferal Code" class="form-control"/>
              </div>
              <div class="register-btn">
                <button type="submit" class="btn btn-primary w-100">Register</button>
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
</body>
</html>
