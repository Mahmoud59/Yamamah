@extends('system.layouts')
@section('content')
    <div class="app-content content container-fluid">
        <div class="content-wrapper">
            <div class="content-body">
                <!-- Server-side processing -->
                <section id="server-processing">
                    <div class="row">
                        <div class="col-xs-12">
							{!! Form::open(['route' => 'system.store.card_types.store', 'method' => 'POST']) !!}
							<div class="col-sm-12">
								<div class="card">
									<div class="card-header">
										@foreach(config('bootstrap.alert') as $value)
											@if(Session::has("alert-{$value}"))
											<div class="alert alert-{{ $value }}">
												{{ Session::get("alert-{$value}") }}
											</div>
											@endif
										@endforeach
									</div>
									<div class="card-block card-dashboard">
										
									</div>
								</div>
							</div>
							{!! Form::close() !!}
                        </div>
                </section>
                <!--/ Javascript sourced data -->
            </div>
        </div>
    </div>
@endsection

@section('header')
    <!--<link rel="stylesheet" type="text/css" href="{{asset('assets/system/vendors/css/extensions/pace.css')}}">-->
@endsection;

@section('footer')
    <!-- BEGIN PAGE VENDOR JS-->
    <!--<script src="{{asset('assets/system/vendors/js/pickers/dateTime/moment-with-locales.min.js')}}" type="text/javascript"></script>-->
    <!-- END PAGE VENDOR JS-->
    <script type="text/javascript">
		
    </script>
@endsection
