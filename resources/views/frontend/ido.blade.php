<!DOCTYPE html>
<html lang="en-US">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Meta World - IDO</title>
<link href="{{asset('/assets/css/bootstrap.css')}}" rel="stylesheet">
<link rel='stylesheet' href='{{asset('assets/css/style.css')}}' type='text/css'/>
<link rel='stylesheet' href='{{asset('assets/css/datatable.css')}}' type='text/css'/>
<link rel='stylesheet' href='{{asset('assets/css/toastr.css')}}' type='text/css'/>
</head>
<body>
<nav class="navbar navbar-expand-lg">
  <div class="container">
    <a class="navbar-brand" href="{{url('/')}}">
      <img src="{{asset('/assets/images/logo.png')}}" alt="" class="img-fluid"/>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto align-items-center">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.html">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Tokonomics</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Roadmap</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contract</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="{{url('/ido')}}">IDO</a>
        </li>
        <li class="nav-item">
          <a class="btn btn-primary" href="{{url('/login')}}">Connect Wallet</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="register-main ido-main">
  <div class="container">
    <div class="ido-outer">
      {{-- <p class="text-center">Wallet Address :- <span id="wallet-address"></span></p> --}}
      <div class="login-outer ido-form">
        <h2>Buy with USDT</h2>
        <form class="form-inner">
          <div class="form-group">
            <label class="d-flex align-items-center justify-content-between">USDT Balance <span id="usdt-bal">0.0000</span></label>
            <input type="text" id="usdt-amt"    placeholder="Enter Usdt" class="form-control" onkeydown="return ['Backspace', 'Delete', 'ArrowLeft', 'ArrowRight'].includes(event.code) ||
              ((event.key === '.' && event.target.value.indexOf('.') === -1) ||
              (!isNaN(Number(event.key)) && event.code !== 'Space' &&
              !((event.target.value.split('.')[1] || '').length >= 4) &&
              parseFloat((event.target.value + event.key).replace(/,/g, '')) <= 100000000  &&
              parseFloat((event.target.value + event.key).replace(/,/g, '')) >= 1))"/>
              <span id="usdt-err" class="text-danger"></span>
          </div>
          <div class="form-group">
            <label class="d-flex align-items-center justify-content-between">META Balance <span id="meta-bal">0.0000</span></label>
            <input type="text"  placeholder="Meta Token" class="form-control" disabled id="meta-amt"/>
          </div>
          <div class="buy-btn">
            <button type="button" id="buy-btn" class="btn btn-primary w-100" disabled>Buy Now</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<script src="{{asset('assets/js/jquery.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.js')}}"></script>
<script src="{{asset('assets/js/datatable.js')}}"></script>
<script src="{{asset('assets/js/toastr.js')}}"></script>
<script src="{{asset('assets/js/web3.js')}}"></script>
<script src="{{asset('assets/js/ido.js?').time()}}"></script>
<script type="text/javascript">
$(window).scroll(function(){
  if ($(this).scrollTop() > 80) {
    $('.navbar').addClass('active');
  } else {
    $('.navbar').removeClass('active');
  }
});
</script>
</body>
</html>
