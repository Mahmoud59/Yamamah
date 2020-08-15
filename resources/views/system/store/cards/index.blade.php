@extends('system.layouts')
@section('content')
<div class="app-content content container-fluid">
	<div class="content-wrapper">
		<div class="content-body">
			<!-- Server-side processing -->
			<section id="server-processing">
				<div class="row">
					<div class="col-xs-12" id="">
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
									<h2>{{__('Show Cards')}}</h2>
								</div>
								<div class="card-block card-dashboard">
									<table class="table" id="cards_table">
									  <thead>
										<tr>
										  <th scope="col">#</th>
										  <th scope="col">{{ __("System number") }}</th>
										  <th scope="col">{{ __("Company") }}</th>
										  <th scope="col">{{ __("Provider") }}</th>
										  <th scope="col">{{ __("Card type") }}</th>
										  <th scope="col">{{ __("Card serial number") }}</th>
										  <th scope="col">{{ __("Operation provider number") }}</th>
										  <th scope="col">{{ __("Status") }}</th>
										  <th scope="col">{{ __("Tools") }}</th>
										</tr>
									  </thead>
									  <tbody>
										@foreach($cards as $card)
										<tr>
										  <th scope="row">{{ $card->id }}</th>
										  <th scope="row">{{ $card->sys_id }}</th>
										  <td>{{ __($card->type->company) }}</td>
										  <td>{{ __($card->provider) }}</td>
										  <td>{{ $card->type->name }} ({{ $card->type->value }})</td>
										  <td>{{ $card->serial_number }}</td>
										  <td>{{ $card->operation_provider_id }}</td>
										  <td>
											@if($card->sys_id)
											{{ __("Used") }}
											@endif
										  </td>
										  <td>
											<div class="dropdown">
											  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="true"><i class="ft-cog icon-left"></i>
											  <span class="caret"></span></button>
											  <ul class="dropdown-menu">
												<li class="dropdown-item"><a href="{{ route('system.store.cards.edit', $card->id) }}">{{ __("Edit") }}</a></li>
												<li class="dropdown-item delete" data-id="{{ $card->id }}"><a href="#">{{ __("Delete") }}</a></li>
											  </ul>
											</div>
										  </td>
										</tr>
										@endforeach
									  </tbody>
									</table>
									<div class="row">
										<div class="col-md-4 offset-md-5">{{ $cards->links('system.store.pagination') }}</div>
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
		$(function(){
			var delete_url = '{{ route("system.store.cards.destroy", 1) }}';
			$('#cards_table .delete').click(function(){
				var _this = $(this);
				var delete_it = confirm('{{ __("Yes delete it") }}');
				if(delete_it){
					var sendData = {
									"card_id": $(this).attr('data-id')
									};
					$.ajax({
						url: delete_url,
						type: "DELETE",
						data: sendData,
						beforeSend: function ( xhr ) {
							//
						}
						}).done(function ( data ) {
							_this.parent().parent().parent().parent().hide();
						});
				}
				return false;
			});
		});
    </script>
@endsection
