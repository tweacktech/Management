@extends('layouts.app')

@section('content')
 <div class="row"> 
<div class="col-md-12">
 <div class="card-header">{{ __('ADMIN') }}</div> </div>
 </div>

<!-- content display -->
  <div class="container-fluid">

    <div class="row">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">Total Views
            <i class="fa fa-usd" aria-hidden="true"></i>
          </div>
          <div class="card-body rounded" id="total-views">
              <center>{{ count($views) }}</center>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">Total Clicks</div>
          <div class="card-body rounded" id="total-clicks">
              <i class="fa fa-eye" aria-hidden="true"></i>
              
              <center>{{ count($clicks) }}</center>

          </div>
        </div>
      </div>
    </div>
<br>
    <div class="row">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">Total Dollar Earned (own blogs)
            <i class="fa fa-usd" aria-hidden="true"></i>
          </div>
          <div class="card-body rounded" id="total-views">
             
              <center> {{ $dollar_earned[0]->amount_earned ?? '0.00' }}</center>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">Total Dollar Earned (combined)</div>
          <div class="card-body rounded" id="total-clicks">
            @php
              $sum_dollar_earned = 0.00;
              foreach($dollar_earned as $d_e) {
                $sum_dollar_earned += $d_e->amount_earned;
              }
            @endphp

           
            <center> {{ $sum_dollar_earned }}</center>
              <i class="fa fa-eye" aria-hidden="true"></i>

          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="script.js"></script>
@endsection
