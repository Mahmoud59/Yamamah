@extends('system.layouts')
@section('content')
    <div class="app-content content container-fluid">
        <div class="content-wrapper">
            <div class="content-body">
                <!-- Server-side processing -->
                <section id="server-processing">
                    <div class="row">
                        <div class="col-xs-12">
							<div class="col-sm-12">
								<div class="card">
									@foreach(config('bootstrap.alert') as $value)
										@if(Session::has("alert-{$value}"))
										<div class="alert alert-{{ $value }}">
											{{ __(Session::get("alert-{$value}")) }}
										</div>
										@endif
									@endforeach
									<div class="card-header">
										<h2>{{__('Show Card Types')}}</h2>
									</div>
									@if(isset($alert))
									<div class="col-sm-12">
										<div class="card">
											<div class="alert alert-{{ $alert->type }}">
												{{__($alert->message)}}
											</div>
										</div>
									</div>
									@endif
									<div class="card-block card-dashboard">
										<table class="table">
										  <thead>
											<tr>
											  <th scope="col">#</th>
											  <th scope="col">{{ __("Company") }}</th>
											  <th scope="col">{{ __("Card name") }}</th>
											  <th scope="col">{{ __("Card value") }}</th>
											  <th scope="col">{{ __("Tools") }}</th>
											</tr>
										  </thead>
										  <tbody>
											@foreach($card_types as $type)
											<tr>
											  <th scope="row">{{ $type->id }}</th>
											  <td>{{ __($type->company) }}</td>
											  <td>{{ $type->name }}</td>
											  <td>{{ $type->value }}</td>
											  <td>
												<div class="dropdown">
												  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="true"><i class="ft-cog icon-left"></i>
												  <span class="caret"></span></button>
												  <ul class="dropdown-menu">
													<li class="dropdown-item"><a href="{{ route('system.store.card_types.edit', $type->id) }}">{{ __("Edit") }}</a></li>
												  </ul>
												</div>
											  </td>
											</tr>
											@endforeach
										  </tbody>
										</table>
										<div class="row">
											<div class="col-md-4 offset-md-5">{{ $card_types->links('system.store.pagination') }}</div>
										</div>
									</div>
								</div>
							</div>
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
