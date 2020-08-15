@extends('system.layouts')
@section('content')
    <div class="app-content content container-fluid">
        <div class="content-wrapper">
            <div class="content-body">
                <!-- Server-side processing -->
                <section id="server-processing">
                    <div class="row">
                        <div class="col-xs-12" id="card_form">
							{!! Form::open(['route' => 'system.store.cards.store', 'method' => 'POST']) !!}
							<div class="col-sm-12">
								<div class="card">
									<div class="card-header">
										@if ($errors->any())
											<div class="alert alert-danger">
												{{__('Please fix the errors below')}}
											</div>
										@endif
										@foreach(config('bootstrap.alert') as $value)
											@if(Session::has("alert-{$value}"))
											<div class="alert alert-{{ $value }}">
												{{ Session::get("alert-{$value}") }}
											</div>
											@endif
										@endforeach
										<h2>{{__('Add Card')}}</h2>
									</div>
									<div class="card-block card-dashboard">
										<div class="form-group col-sm-4 {{ $errors->has('company') ? 'has-danger' : '' }}">
											<div class="controls">
												{!! Form::label('company', __('Choose Comapny').':') !!}
												<select name="company" class="form-control">
												@foreach(config('enums.companies') as $company)
												<option value="{{$company}}" {{ (old('company') == $company)?'selected':'' }}>{{__($company)}}</option>
												@endforeach
												</select>
												@if($errors->has('company'))
												<p class="text-xs-left"><small class="danger text-muted">{{ $errors->first('company') }}<br></small></p>
												@endif
											</div>
										</div>
										<div class="form-group col-sm-4 {{ $errors->has('card_type_id') ? 'has-danger' : '' }}">
											<div class="controls">
												{!! Form::label('company', __('Choose Card').':') !!}
												<select name="card_type_id" class="form-control">
												@if(isset($card_types['Vodafone']))
												@foreach($card_types['Vodafone'] as $type)
												<option value="{{ $type['id'] }}" {{ (old('card_type_id') == $type['id'])?'selected':'' }}>{{ $type['name'] }} ({{  $type['value']}})</option>
												@endforeach
												@endif
												</select>
												@if($errors->has('card_type_id'))
												<p class="text-xs-left"><small class="danger text-muted">{{ $errors->first('card_type_id') }}<br></small></p>
												@endif
											</div>
										</div>
										<div class="form-group col-sm-4 {{ $errors->has('provider') ? 'has-danger' : '' }}">
											<div class="controls">
												{!! Form::label('provider', __('Choose Provider').':') !!}
												<select name="provider" class="form-control">
												@foreach(config('enums.providers') as $provider)
												<option value="{{$provider}}" {{ (old('provider') == $provider)?'selected':'' }}>{{__($provider)}}</option>
												@endforeach
												</select>
												@if($errors->has('provider'))
												<p class="text-xs-left"><small class="danger text-muted">{{ $errors->first('provider') }}<br></small></p>
												@endif
											</div>
										</div>
										<div class="form-group col-sm-4 {{ $errors->has('serial_number') ? 'has-danger' : '' }}">
											<div class="controls">
												{!! Form::label('serial_number', __('Serial Number').':') !!}
												{!! Form::text('serial_number', old('serial_number')?old('serial_number'):'', ['class'=>'form-control']) !!}
												@if($errors->has('serial_number'))
												<p class="text-xs-left"><small class="danger text-muted">{{ $errors->first('serial_number') }}<br></small></p>
												@endif
											</div>
										</div>
										<div class="form-group col-sm-4 {{ $errors->has('secret_code') ? 'has-danger' : '' }}">
											<div class="controls">
												{!! Form::label('secret_code', __('Secret code').':') !!}
												{!! Form::text('secret_code', old('secret_code')?old('secret_code'):'', ['class'=>'form-control']) !!}
												@if($errors->has('secret_code'))
												<p class="text-xs-left"><small class="danger text-muted">{{ $errors->first('secret_code') }}<br></small></p>
												@endif
											</div>
										</div>
										<div class="form-group col-sm-4 {{ $errors->has('operation_provider_id') ? 'has-danger' : '' }}">
											<div class="controls">
												{!! Form::label('operation_provider_id', __('Customer Provider ID').':') !!}
												{!! Form::text('operation_provider_id', old('operation_provider_id')?old('operation_provider_id'):'', ['class'=>'form-control']) !!}
												@if($errors->has('operation_provider_id'))
												<p class="text-xs-left"><small class="danger text-muted">{{ $errors->first('operation_provider_id') }}<br></small></p>
												@endif
											</div>
										</div>
										
										<div class="form-group col-sm-12">
											<div class="controls">
												{!! Form::submit(__('Save'),['class'=>'btn btn-success pull-right']) !!}
											</div>
										</div>
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
		var card_types = {!! json_encode($card_types) !!};
		$(function(){
			$('#card_form select[name=company]').change(function(){
				var options = '';
				$.each(card_types[$(this).val()], function( index, value ) {
					options += '<option value="'+value['id']+'">'+value['name']+' ('+value['value']+')</option>';
				});
				$('#card_form select[name=card_type_id]').html(options);
			});
		});
    </script>
@endsection
