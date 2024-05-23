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
                <h4>ID - {{$authuser?->id??'-'}}</h4>
                <p>{{substr($authuser?->wallet_address,0,5).'.....'.substr($authuser?->wallet_address,-5)??'-'}}</p>
              </div>
            </div>
          </div>
          <div class="col-md-8 col-sm-8 col-12 more-space">
            <div class="detail-inner reffer-card">
              <h4>Refferal</h4>
              <form>
                <div class="form-group position-relative">
                  <input type="text" value="{{$authuser?->is_activate==1?$authuser?->register_id:''}}" placeholder="Referral Code" class="form-control" readonly/>
                  @if ($authuser?->is_activate==1)
                  <span class="d-none" id="referral_code">{{$authuser?->register_id}}</span>
                  <span class="d-none" id="referral_link">{{url("/register/{$authuser?->register_id}")}}</span>
                  @endif
                  <a href="javascript:void(0)" class="copy-icon position-absolute {{$authuser?->is_activate==1?'copy_code':''}}">
                    <img src="{{asset('assets/images/copy-icon.png')}}" alt="" class="img-fluid"/>
                  </a>
                </div>
                <div class="form-group position-relative">
                  <input type="text" value="{{$authuser?->is_activate==1?url("/register/{$authuser?->register_id}"):''}}" placeholder="Referral URL" class="form-control" readonly/>
                  <a href="javascript:void(0)" class="copy-icon position-absolute {{$authuser?->is_activate==1?'copy_link':''}}">
                    <img src="{{asset('assets/images/copy-icon.png')}}" alt="" class="img-fluid"/>
                  </a>
                </div>
              </form>
            </div>
            <div class="detail-inner rank-card d-flex flex-wrap">
              <div class="rank-left">
                <h4>Rank</h4>
                <p class="display-5"><b>{{$authuser?->Rank?->name??'No Rank'}}</b></p>
              </div>
              <div class="rank-right">
                <img src="{{asset('assets/images/rank-icon1.png')}}" alt="" class="img-fluid"/>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-3 col-12">
            <div class="detail-inner income-card">
              <h4>Stacking</h4>
              <h5><small>$</small> {{number_format($authuser?->total_packages??'0',4)}}</h5>
            </div>
          </div>
          <div class="col-md-3 col-sm-3 col-12">
            <div class="detail-inner income-card total-income">
              <h4>Total Income</h4>
              <h5> <small>$</small> {{number_format($authuser?->total_income??0,4)}}</h5>
            </div>
          </div>
          <div class="col-md-3 col-sm-3 col-12">
            <div class="detail-inner income-card direct-income">
              <h4>Direct Income</h4>
              <h5><small>$</small> {{number_format($authuser?->direct_income??0,4)}} </h5>
            </div>
          </div>
          <div class="col-md-3 col-sm-3 col-12">
            <div class="detail-inner income-card level-income">
              <h4>Level Income</h4>
              <h5><small>$</small> {{number_format($authuser?->level_income??0,4)}} </h5>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
