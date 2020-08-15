@extends('system.layouts')
@section('content')
    <div class="app-content content container-fluid">
        <div class="content-wrapper">
            <div class="content-body">
                <!-- Server-side processing -->
                <section id="server-processing">
                    <div class="row">
                        <div class="col-xs-12">
							{!! Form::open(['route' => ['system.store.card_types.update', $card_type->id], 'method' => 'PUT']) !!}
							{!! Form::hidden('id', $card_type->id) !!}
							<div class="col-sm-12">
								<div class="card">
									<div class="card-header">
										@if ($errors->any())
											<div class="alert alert-danger">
												{{__('Please fix the errors below')}}
											</div>
											@foreach($errors->all() as $error)
											<div>{{ $error }}</div>
											@endforeach
										@endif
										@foreach(config('bootstrap.alert') as $value)
											@if(Session::has("alert-{$value}"))
											<div class="alert alert-{{ $value }}">
												{{ Session::get("alert-{$value}") }}
											</div>
											@endif
										@endforeach
										<h2>{{__('Edit Card Type')}}</h2>
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
										<div class="form-group col-sm-4 {{ $errors->has('company') ? 'has-danger' : '' }}">
											<div class="controls">
												{!! Form::label('company', __('Choose Comapny').':') !!}
												<select name="company" class="form-control">
												@foreach(config('enums.companies') as $company)
												<option value="{{$company}}" {{ ($card_type->company == $company)?'selected':'' }}>{{__($company)}}</option>
												@endforeach
												</select>
												@if($errors->has('company'))
												<p class="text-xs-left"><small class="danger text-muted">{{ $errors->first('company') }}<br></small></p>
												@endif
											</div>
										</div>
										<div class="form-group col-sm-4 {{ $errors->has('name') ? 'has-danger' : '' }}">
											<div class="controls">
												{!! Form::label('name', __('Card Type').':') !!}
												{!! Form::text('name', $card_type->name, ['class'=>'form-control']) !!}
												@if($errors->has('name'))
												<p class="text-xs-left"><small class="danger text-muted">{{ $errors->first('name') }}<br></small></p>
												@endif
											</div>
										</div>
										<div class="form-group col-sm-4 {{ $errors->has('value') ? 'has-danger' : '' }}">
											<div class="controls">
												{!! Form::label('value', __('Card value').':') !!}
												{!! Form::text('value', $card_type->value, ['class'=>'form-control']) !!}
												@if($errors->has('value'))
												<p class="text-xs-left"><small class="danger text-muted">{{ $errors->first('value') }}<br></small></p>
												@endif
											</div>
										</div>
										
										<div class="form-group col-sm-12">
											<div class="controls">
												{!! Form::submit(__('Edit'),['class'=>'btn btn-success pull-right']) !!}
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
		
    </script>
@endsection
