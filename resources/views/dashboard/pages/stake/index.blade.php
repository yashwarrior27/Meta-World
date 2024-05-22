@extends('dashboard.layouts.app')
@section('content')
<div class="dash-detail">
    <div class="container-fluid">
      <div class="page-heading">
        <h1>Stake</h1>
      </div>
      @php
          $css=['basic-plan','standard-plan','standard-plan'];
          $c=0;
      @endphp
      @foreach ($package as $key=>$value)

   <div class="detail-main plan-main ">
        <div class="section-heading">
          <h3>{{$key}}</h3>
        </div>
        <div class="row">
            @foreach ( $value as $item=>$pack)
            <div class="col-md-4 col-sm-4 col-12">
                <div class="detail-inner income-card {{$css[$c]}}">

                  <h3 class="title">{{$pack?->amount??'-'}} <small>$</small></h3>
                  <div class="stack-btn">
                    <button class="btn btn-primary stake-btn" stake-pack={{$pack?->id}}>Stack Now</button>
                  </div>
                  <input type="hidden" value="{{$pack?->amount}}" id="{{$pack?->id}}-amt">
                </div>
              </div>
            @endforeach

            @php
                $c++;
            @endphp
        </div>
      </div>
      @endforeach

    </div>
  </div>
@endsection
