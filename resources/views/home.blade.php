@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('EMPLOYEE') }}</div>
                  <div class="card-body">
                    <div class="row"> <div class="col-md-6" id="m">  
             <img src="{{url('employee.jpeg')}}" class="img-circle" alt="Cinque Terre" width="304" height="236"><div class="row"><center>EMPLOYEE</center> </div>
        </div></div>

                <div class="card-body">
                    @if (session('status'))

                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
