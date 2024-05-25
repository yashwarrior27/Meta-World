<!DOCTYPE html>
<html lang="en-US">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Meta World</title>
<link href="{{asset('/assets/css/bootstrap.css')}}" rel="stylesheet">
<link rel='stylesheet' href='{{asset('assets/css/style.css')}}' type='text/css'/>
<link rel="stylesheet" href="{{asset('assets/css/toastr.css')}}">

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
          <a class="nav-link active" aria-current="page" href="#">Home</a>
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
          <a class="nav-link" href="{{url('/ido')}}">IDO</a>
        </li>
        <li class="nav-item">
          <a class="btn btn-primary" href="{{url('/login')}}">Connect Wallet</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="hero-banner">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-7 col-12">
          <div class="banner-left">
            <h1>Meta World <span>And Precious Metals Investment</span></h1>
            <div class="ico-meter">
              <p><b>Meter ICO From 1 Jan to 31 May</b></p>
              <div id="countdown">
                <ul>
                  <li><span id="days"></span>days</li>
                  <li><span id="hours"></span>Hours</li>
                  <li><span id="minutes"></span>Minutes</li>
                  <li><span id="seconds"></span>Seconds</li>
                </ul>
              </div>
            </div>
            <div class="banner-btns">
              <a href="{{url('/ido')}}" class="btn btn-primary">Buy Now</a>
              <a href="javascript:void(0)" class="btn btn-primary">WhitePappers</a>
            </div>
          </div>
        </div>
        <div class="col-md-5 col-12">
          <div class="banner-right">
            <img src="{{asset('/assets/images/banner-right3.png')}}" alt="" class="bounce img-fluid"/>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="meta-video">
    <div class="container">
      <div class="video-outer position-relative">
        <h2><span class="d-block">Decentralised Economy</span> Meta World</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        <div class="play-btn position-absolute">
          <a href="javascript:void(0)" class="play-video position-relative" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <img src="{{asset('/assets/images/play-icon.png')}}" alt="" class="img-fluid">
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="about-main">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-5 col-12">
          <div class="about-left">
            <img src="{{asset('/assets/images/about-img1.png')}}" alt="" class="bounce img-fluid"/>
          </div>
        </div>
        <div class="col-md-7 col-12">
          <div class="about-right">
            <h3 class="title">About <span class="brand-name">Meta World</span></h3>
            <p>Our mission is to leverage the power of the Meta World Coin through a protocol trusted with billions for its performance and reliability. We believe in empowering you to take full control of your portfolio.</p>
            <p>At N1, we are passionate about fostering the growth of the crypto community and the adoption of Meta World coin. As the world witnesses a surge in crypto adoption, we believe in the importance of increasing liquidity to match. We are not a financial service provider, nor do we sell financial products or make lucrative offers. Instead, we are a dedicated platform where users can participate, engage, and earn rewards in the form of Meta World coins. Our mission is to build a thriving community that supports the Meta World coin ecosystem, empowering users to take control of their digital assets and be a part of the future of finance. Join us on this exciting journey!</p>
            <p>Join us at N1 and take full advantage of what Nordek has to offer!</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="collection-main">
    <div class="container">
      <div class="section-heading text-center">
        <h3 class="title">Our <span class="brand-name">Meta World</span> Collections</h3>
      </div>
      <div class="collection-outer">
        <div class="row">
          <div class="col-md-3 col-sm-6 col-12 more-space">
            <div class="collection-inner">
              <div class="img-outer">
                <img src="{{asset('/assets/images/collection-icon1.png')}}" alt="" class="img-fluid"/>
              </div>
              <div class="content-outer">
                <h4>Stacking</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-12 more-space">
            <div class="collection-inner">
              <div class="img-outer">
                <img src="{{asset('/assets/images/collection-icon2.png')}}" alt="" class="img-fluid"/>
              </div>
              <div class="content-outer">
                <h4>IDO</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-12 more-space">
            <div class="collection-inner">
              <div class="img-outer">
                <img src="{{asset('/assets/images/collection-icon3.png')}}" alt="" class="img-fluid"/>
              </div>
              <div class="content-outer">
                <h4>Direct Income</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-12 more-space">
            <div class="collection-inner">
              <div class="img-outer">
                <img src="{{asset('/assets/images/collection-icon4.png')}}" alt="" class="img-fluid"/>
              </div>
              <div class="content-outer">
                <h4>Level Income</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="our-plans">
    <div class="container">
      <div class="section-heading text-center">
        <h3 class="title"><span class="brand-name">Meta World</span> Plans</h3>
      </div>
      <div class="plan-main">
        <div class="row">
          <div class="col-md-4 col-12">
            <div class="plan-outer text-center">
              <div class="img-outer">
                <img src="{{asset('/assets/images/plan-icon1.png')}}" alt="" class="img-fluid"/>
              </div>
              <h5 class="m-0">Basic Plan</h5>
              <div class="plan-amount">
                <h4 class="display-3"><sup>$</sup>10</h4>
              </div>
              <div class="join-btn">
                <a href="{{url('/login')}}" class="btn btn-primary">Join Now</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-12">
            <div class="plan-outer text-center">
              <div class="img-outer">
                <img src="{{asset('/assets/images/plan-icon2.png')}}" alt="" class="img-fluid"/>
              </div>
              <h5 class="m-0">Standard Plan</h5>
              <div class="plan-amount">
                <h4 class="display-3"><sup>$</sup>100</h4>
              </div>
              <div class="join-btn">
                <a href="{{url('/login')}}" class="btn btn-primary">Join Now</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-12">
            <div class="plan-outer text-center">
              <div class="img-outer">
                <img src="{{asset('/assets/images/plan-icon3.png')}}" alt="" class="img-fluid"/>
              </div>
              <h5 class="m-0">Advance Plan</h5>
              <div class="plan-amount">
                <h4 class="display-3"><sup>$</sup>1000</h4>
              </div>
              <div class="join-btn">
                <a href="{{url('/login')}}" class="btn btn-primary">Join Now</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="tokenomics-main">
    <div class="container">
      <div class="section-heading text-center">
        <h3 class="title"><span class="brand-name">Meta</span> Tokenomics</h3>
      </div>
      <div class="tokenomics-outer">
        <div class="row align-items-center">
          <div class="col-md-7 col-12">
            <div class="token-left">
              <ul>
                <li class="d-flex flex-wrap align-items-center">
                  <div class="img-outer">
                    <img src="{{asset('/assets/images/tokenomics-left1.png')}}" alt="" class="img-fluid"/>
                  </div>
                  <div class="content-outer">
                    <h4>10% System Maintenance</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam laborum.</p>
                  </div>
                </li>
                <li class="d-flex flex-wrap align-items-center">
                  <div class="img-outer">
                    <img src="{{asset('/assets/images/tokenomics-left2.png')}}" alt="" class="img-fluid"/>
                  </div>
                  <div class="content-outer">
                    <h4>15% Special Reward</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam laborum.</p>
                  </div>
                </li>
                <li class="d-flex flex-wrap align-items-center">
                  <div class="img-outer">
                    <img src="{{asset('/assets/images/tokenomics-left3.png')}}" alt="" class="img-fluid"/>
                  </div>
                  <div class="content-outer">
                    <h4>20% Reward</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam laborum.</p>
                  </div>
                </li>
                <li class="d-flex flex-wrap align-items-center">
                  <div class="img-outer">
                    <img src="{{asset('/assets/images/tokenomics-left4.png')}}" alt="" class="img-fluid"/>
                  </div>
                  <div class="content-outer">
                    <h4>55% Stacking</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam laborum.</p>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-5 col-12">
            <div class="token-right text-center">
              <img src="{{asset('/assets/images/tokenomics-right1.png')}}" alt="" class="img-fluid"/>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="roadmap-main">
    <div class="container">
      <div class="section-heading text-center">
        <h3 class="title">Roadmap</h3>
      </div>
      <div class="roadmap-outer">
        <div class="row justify-content-center">
          <div class="col-md-2 col-sm-6 col-12  more-space">
            <div class="roadmap-inner text-center position-relative">
              <div class="img-outer">
                <img src="{{asset('/assets/images/roadmap-img1.png')}}" alt="" class="img-fluid"/>
              </div>
              <div class="content-outer position-absolute">
                <h4>April 2024</h4>
                <p>Start of the Meta World Token.</p>
              </div>
            </div>
          </div>
          <div class="col-md-2 col-sm-6 col-12  more-space">
            <div class="roadmap-inner text-center position-relative">
              <div class="img-outer">
                <img src="{{asset('/assets/images/roadmap-img1.png')}}" alt="" class="img-fluid"/>
              </div>
              <div class="content-outer position-absolute">
                <h4>April 2024</h4>
                <p>Start of the Meta World Token.</p>
              </div>
            </div>
          </div>
          <div class="col-md-2 col-sm-6 col-12  more-space">
            <div class="roadmap-inner text-center position-relative">
              <div class="img-outer">
                <img src="{{asset('/assets/images/roadmap-img1.png')}}" alt="" class="img-fluid"/>
              </div>
              <div class="content-outer position-absolute">
                <h4>April 2024</h4>
                <p>Start of the Meta World Token.</p>
              </div>
            </div>
          </div>
          <div class="col-md-2 col-sm-6 col-12  more-space">
            <div class="roadmap-inner text-center position-relative">
              <div class="img-outer">
                <img src="{{asset('/assets/images/roadmap-img1.png')}}" alt="" class="img-fluid"/>
              </div>
              <div class="content-outer position-absolute">
                <h4>April 2024</h4>
                <p>Start of the Meta World Token.</p>
              </div>
            </div>
          </div>
          <div class="col-md-2 col-sm-6 col-12  more-space">
            <div class="roadmap-inner text-center position-relative">
              <div class="img-outer">
                <img src="{{asset('/assets/images/roadmap-img1.png')}}" alt="" class="img-fluid"/>
              </div>
              <div class="content-outer position-absolute">
                <h4>April 2024</h4>
                <p>Start of the Meta World Token.</p>
              </div>
            </div>
          </div>
          <div class="col-md-2 col-sm-6 col-12  more-space">
            <div class="roadmap-inner text-center position-relative">
              <div class="img-outer">
                <img src="{{asset('/assets/images/roadmap-img1.png')}}" alt="" class="img-fluid"/>
              </div>
              <div class="content-outer position-absolute">
                <h4>April 2024</h4>
                <p>Start of the Meta World Token.</p>
              </div>
            </div>
          </div>
          <div class="col-md-2 col-sm-6 col-12  more-space">
            <div class="roadmap-inner text-center position-relative">
              <div class="img-outer">
                <img src="{{asset('/assets/images/roadmap-img1.png')}}" alt="" class="img-fluid"/>
              </div>
              <div class="content-outer position-absolute">
                <h4>April 2024</h4>
                <p>Start of the Meta World Token.</p>
              </div>
            </div>
          </div>
          <div class="col-md-2 col-sm-6 col-12  more-space">
            <div class="roadmap-inner text-center position-relative">
              <div class="img-outer">
                <img src="{{asset('/assets/images/roadmap-img1.png')}}" alt="" class="img-fluid"/>
              </div>
              <div class="content-outer position-absolute">
                <h4>April 2024</h4>
                <p>Start of the Meta World Token.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="faq-main position-relative">
    <div class="faq-left position-absolute start-0 bottom-0">
      <img src="{{asset('/assets/images/faq-img2.png')}}" alt="" class="img-fluid"/>
    </div>
    <div class="container">
      <div class="section-heading text-center">
        <h3 class="title"><span class="brand-name">Meta World</span> FAQ</h3>
      </div>
      <div class="faq-outer">
        <div class="accordion" id="accordionExample">
          <div class="accordion-item">
            <h4 class="accordion-header accordion-button" id="headingOne" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              What is Meta World ?
            </h4>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in felis dignissim, imperdiet nulla vitae, condimentum nulla. Ut scelerisque a nisl sit amet facilisis. Etiam blandit iaculis tellus, vitae condimentum leo congue a. Vivamus in vehicula massa. Pellentesque libero libero, commodo lacinia volutpat non, tincidunt at lectus. Maecenas ipsum turpis, viverra vitae lacus eu, fringilla ultricies erat. Aenean hendrerit maximus sodales.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h4 class="accordion-header accordion-button collapsed" id="headingTwo" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              Is Meta World safe ?
            </h4>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>Quisque sapien augue, ornare id leo a, tristique elementum justo. Praesent non nulla sagittis, sollicitudin justo id, varius erat. Nunc sed pharetra nisl. Cras et suscipit felis, in lacinia sapien. Integer venenatis sagittis massa, eu eleifend nibh venenatis in. Pellentesque a aliquet urna. Curabitur tortor metus, ultrices sed mi at, sagittis imperdiet turpis. Suspendisse nec luctus nunc. Fusce in arcu quis lacus mollis ultrices.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h4 class="accordion-header accordion-button collapsed" id="headingThree" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              How do I start Meta World?
            </h4>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>Praesent nec ipsum scelerisque dui condimentum pellentesque eu at lectus. Vivamus purus purus, bibendum in vestibulum ac, pharetra sit amet sapien. Nunc luctus, orci vel luctus cursus, nibh nisl ullamcorper ipsum, eu malesuada arcu augue id nisi. In auctor mi ac ante tincidunt tincidunt.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h4 class="accordion-header accordion-button collapsed" id="headingFour" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
              Is Meta World safe ?
            </h4>
            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>Quisque sapien augue, ornare id leo a, tristique elementum justo. Praesent non nulla sagittis, sollicitudin justo id, varius erat. Nunc sed pharetra nisl. Cras et suscipit felis, in lacinia sapien. Integer venenatis sagittis massa, eu eleifend nibh venenatis in. Pellentesque a aliquet urna. Curabitur tortor metus, ultrices sed mi at, sagittis imperdiet turpis. Suspendisse nec luctus nunc. Fusce in arcu quis lacus mollis ultrices.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h4 class="accordion-header accordion-button collapsed" id="headingFive" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
              How do I start Meta World?
            </h4>
            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>Praesent nec ipsum scelerisque dui condimentum pellentesque eu at lectus. Vivamus purus purus, bibendum in vestibulum ac, pharetra sit amet sapien. Nunc luctus, orci vel luctus cursus, nibh nisl ullamcorper ipsum, eu malesuada arcu augue id nisi. In auctor mi ac ante tincidunt tincidunt.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="contract-main">
    <div class="container">
      <div class="contract-outer text-center">
        <h3 class="title"><span class="brand-name">Meta World</span> CONTRACT</h3>
        <h4>Binance Smart Chain</h4>
        <p id="address">0x1E7427d132dC6b19f8EF53d9b2dD3030A3f679AE</p>
        <div class="copy-btn">
          <button class="btn btn-primary copy_address">Copy</button>
        </div>
      </div>
    </div>
  </div>
  <footer class="footer-main">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-6 col-12">
          <div class="footer-left">
            <div class="footer-logo">
              <a href="javascript:void(0)">
                <img src="{{asset('/assets/images/logo.png')}}" alt="" class="img-fluid"/>
              </a>
            </div>
            <p>A new way to make the payments easy, reliable and 100% secure. claritatem itamconse quat. Exerci tationulla</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 col-12 text-center">
          <div class="footer-middle">
            <h6>Company</h6>
            <ul class="footer-links">
              <li>
                <a href="javascript:void(0)">About Us</a>
              </li>
              <li>
                <a href="javascript:void(0)">Token Distribution</a>
              </li>
              <li>
                <a href="javascript:void(0)">FAQ</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 col-12">
          <div class="footer-middle">
            <h6>Support</h6>
            <ul class="footer-links">
              <li>
                <a href="javascript:void(0)">Contact</a>
              </li>
              <li>
                <a href="javascript:void(0)">Downloads & Resources</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="container">
        <div class="copy-right text-center">
          <p>© 2024 <span class="brand-name">Meta World</span>. All Rights Reserved</p>
        </div>
      </div>
    </div>
  </footer>
  <!-- Modal -->
  <div class="world-video modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content position-relative">
        <button type="button" class="btn-close position-absolute" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="modal-body p-0">
          <iframe src="https://www.youtube.com/embed/fUmZBc4UUDE?si=8NTW-UUGvOArC9MQ&amp;controls=0&amp;" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen autoplay></iframe>
        </div>
      </div>
    </div>
  </div>
<script src="{{asset('assets/js/jquery.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.js')}}"></script>
<script src="{{asset('assets/js/toastr.js')}}"></script>
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

<script type="text/javascript">
$(window).scroll(function(){
  if ($(this).scrollTop() > 80) {
    $('.navbar').addClass('active');
  } else {
    $('.navbar').removeClass('active');
  }
});
</script>
<script type="text/javascript">
(function () {
  const second = 1000,
        minute = second * 60,
        hour = minute * 60,
        day = hour * 24;
  let today = new Date(),
      dd = String(today.getDate()).padStart(2, "0"),
      mm = String(today.getMonth() + 1).padStart(2, "0"),
      yyyy = today.getFullYear(),
      nextYear = yyyy + 1,
      dayMonth = "05/31/",
      birthday = dayMonth + yyyy;
  today = mm + "/" + dd + "/" + yyyy;
  if (today > birthday) {
    birthday = dayMonth + nextYear;
  }
  const countDown = new Date(birthday).getTime(),
      x = setInterval(function() {
        const now = new Date().getTime(),
              distance = countDown - now;
        document.getElementById("days").innerText = Math.floor(distance / (day)),
          document.getElementById("hours").innerText = Math.floor((distance % (day)) / (hour)),
          document.getElementById("minutes").innerText = Math.floor((distance % (hour)) / (minute)),
          document.getElementById("seconds").innerText = Math.floor((distance % (minute)) / second);
        if (distance < 0) {
          document.getElementById("headline").innerText = "It's my birthday!";
          document.getElementById("countdown").style.display = "none";
          document.getElementById("content").style.display = "block";
          clearInterval(x);
        }
      }, 0)
  }());


  function copyToClipboard(text) {
    var tempInput = document.createElement("input");
    tempInput.value = text;
    document.body.appendChild(tempInput);
    tempInput.select();
    tempInput.setSelectionRange(0, 99999);
    document.execCommand("copy");
    document.body.removeChild(tempInput);
  }

  $('.copy_address').on('click', function (e) {
    var copyGfGText = document.getElementById("address").innerHTML;
     (async () => {
    try {
      await copyToClipboard(copyGfGText);
      toastr.success('Link copied to clipboard');
    } catch (err) {
      toastr.error('Failed to copy: ', err);
    }
    })()
    });
</script>
</body>
</html>
