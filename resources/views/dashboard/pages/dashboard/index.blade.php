@extends('dashboard.layouts.app')
@section('content')
<div class="dash-detail">
    <div class="container-fluid">
      <div class="page-heading">
        <h1>Dashboard</h1>
      </div>
      <div class="detail-main">
        <div class="row">
          <div class="col-md-4 col-sm-4 col-12 more-space">
            <div class="detail-inner wallet-card text-center">
              <div class="wallet-left">
                <img src="{{asset('assets/images/profile-icon1.png')}}" alt="" class="img-fluid"/>
              </div>
              <div class="wallet-right">
                <h4>ID - 1</h4>
                <p>1FfmbHfnpaZjKFvyi1okTjJJusN455paPH</p>
              </div>
            </div>
          </div>
          <div class="col-md-8 col-sm-8 col-12 more-space">
            <div class="detail-inner reffer-card">
              <h4>Refferal</h4>
              <form>
                <div class="form-group position-relative">
                  <input type="text" name="" placeholder="Refer Code" class="form-control"/>
                  <a href="javascript:void(0)" class="copy-icon position-absolute">
                    <img src="{{asset('assets/images/copy-icon.png')}}" alt="" class="img-fluid"/>
                  </a>
                </div>
                <div class="form-group position-relative">
                  <input type="text" name="" placeholder="Refer URL" class="form-control"/>
                  <a href="javascript:void(0)" class="copy-icon position-absolute">
                    <img src="{{asset('assets/images/copy-icon.png')}}" alt="" class="img-fluid"/>
                  </a>
                </div>
              </form>
            </div>
            <div class="detail-inner rank-card d-flex flex-wrap">
              <div class="rank-left">
                <h4>Rank</h4>
                <p class="display-5"><b>Double Diamond</b></p>
              </div>
              <div class="rank-right">
                <img src="{{asset('assets/images/rank-icon1.png')}}" alt="" class="img-fluid"/>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-3 col-12">
            <div class="detail-inner income-card">
              <h4>Stacking</h4>
              <h5><small>$</small> 100</h5>
            </div>
          </div>
          <div class="col-md-3 col-sm-3 col-12">
            <div class="detail-inner income-card total-income">
              <h4>Total Income</h4>
              <h5>1000 <small>MT</small></h5>
            </div>
          </div>
          <div class="col-md-3 col-sm-3 col-12">
            <div class="detail-inner income-card direct-income">
              <h4>Direct Income</h4>
              <h5>800 <small>MT</small></h5>
            </div>
          </div>
          <div class="col-md-3 col-sm-3 col-12">
            <div class="detail-inner income-card level-income">
              <h4>Level Income</h4>
              <h5>200 <small>MT</small></h5>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
