@extends('dashboard.layouts.app')
@section('content')
<div class="dash-detail">
    <div class="container-fluid">
      <div class="page-heading">
        <h1>Stacking</h1>
      </div>
      <div class="detail-main">
        <div class="table-responsive">
            <table class="table pt-4 table-dark" id="myTable">
              <thead  >
                <tr >
                  <th class="text-center">S.No</th>
                  <th class="text-center">Package Name</th>
                  <th class="text-center">Amount ($)</th>
                  <th class="text-center">Total Days</th>
                  <th class="text-center">Day count</th>
                  <th class="text-center">Status</th>
                  <th class="text-center">Date</th>

                </tr>
              </thead>
              <tbody>
                  @if (isset($data))
                  @foreach ($data as $key=>$value)

                   <tr class="text-center">
                        <td>{{$key+1??'-'}}</td>
                        <td>{{$value?->package_name??'-'}}</td>
                        <td>{{number_format($value?->amount??0,4)}}</td>
                        <td>{{$value?->days??'-'}}</td>
                        <td>{{$value?->count??'-'}}</td>
                        <td>
                            @if ($value?->status==1)
                              <span class="badge bg-success">Active</span>
                            @else
                              <span class="badge bg-danger">Expired</span>
                            @endif
                        </td>
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
