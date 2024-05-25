<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="offcanvasExampleLabel">
        <a href="{{url('/dashboard')}}">
          <img src="{{asset('assets/images/logo.png')}}" alt="" class="img-fluid"/>
        </a>
      </h5>
    </div>
    <div class="offcanvas-body">
      <div class="navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{request()->segment(1)=='dashboard'?'active':''}}" aria-current="page" href="{{url('/dashboard')}}"><img src="{{asset('assets/images/menu-icon1.png')}}" alt="" class="img-fluid" /> Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{request()->segment(1)=='stake'?'active':''}}" href="{{url('/stake')}}"><img src="{{asset('assets/images/menu-icon2.png')}}" alt="" class="img-fluid" /> Stake</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{request()->segment(1)=='staking-report'?'active':''}}" href="{{url('/staking-report')}}"><img src="{{asset('assets/images/menu-icon3.png')}}" alt="" class="img-fluid" /> Staking Report</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{request()->segment(1)=='direct-income'?'active':''}}" href="{{url('/direct-income')}}"><img src="{{asset('assets/images/menu-icon4.png')}}" alt="" class="img-fluid" /> Direct Income</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  {{request()->segment(1)=='level-income'?'active':''}}" href="{{url('/level-income')}}"><img src="{{asset('assets/images/menu-icon5.png')}}" alt="" class="img-fluid" /> Level Income</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  {{request()->segment(1)=='roi-income'?'active':''}}" href="{{url('/roi-income')}}"><img src="{{asset('assets/images/menu-icon5.png')}}" alt="" class="img-fluid" /> Roi Income</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
