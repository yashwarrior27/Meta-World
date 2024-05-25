@extends('dashboard.layouts.app')
@section('content')
<div class="dash-detail">
    <div class="container-fluid">
      <div class="page-heading">
        <h1>Direct Income</h1>
      </div>
      <div class="detail-main">
        <div class="table-responsive">
            <table class="table pt-4 table-dark" id="myTable">
              <thead  >
                <tr >
                  <th class="text-center">S.No</th>
                  <th class="text-center">From Register ID</th>
                  <th class="text-center">Package Amount ($)</th>
                  <th class="text-center">Amount ($)</th>
                  <th class="text-center">Date</th>

                </tr>
              </thead>
              <tbody>
                  @if (isset($data))
                  @foreach ($data as $key=>$value)

                   <tr class="text-center">
                        <td>{{$key+1??'-'}}</td>
                        <td>{{$value?->PackageUser?->User?->register_id??'-'}}</td>
                        <td>{{number_format($value?->PackageUser?->amount??0,4)}} $</td>
                        <td>{{number_format($value?->amount??0,4)}} $</td>
                      <td>{{date('Y-m-d',strtotime($value?->created_at))??'-'}}</td>

                   </tr>
                  @endforeach

                  @endif

              </tbody>
            </table>

          </div>
      </div>
    </div>
  </div>
@endsection
