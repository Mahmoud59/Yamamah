@extends('system.layouts')

@section('content')
    <div class="app-content content container-fluid">
        <div class="content-wrapper">
            <div class="content-header row">

                <div class="content-header-left col-md-4 col-xs-12">
                    <h4>
                        {{$pageTitle}}
                    </h4>
                </div>
                <div class="content-header-right col-md-8 col-xs-12 mb-2">
                    <div class=" content-header-title mb-0" style="float: right;">
                        @include('system.breadcrumb')
                    </div>
                </div>
            </div>
            <div class="content-body"><!-- Spacing -->
                <div class="row">
                    <div class="col-md-8">

                        <section class="card">
                            <div class="card-header">
                                <h4 class="card-title">{{__('Merchants')}}</h4>
                            </div>
                            <div class="card-body collapse in">
                                <div class="card-block">
                                <div class="table-responsive">
                                    <table class="table" id="merchant-table">
                                        <thead>
                                        <tr>
                                            <th>{{__('ID')}}</th>
                                            <th>{{__('Logo')}}</th>
                                            <th>{{__('Name')}}</th>
                                            <th>{{__('Created By')}}</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>
                                </div>

                            </div>
                        </section>
                        <section class="card">
                            <div class="card-header">
                                <h4 class="card-title">{{__('Contracts')}}</h4>
                            </div>
                            <div class="card-body collapse in">
                                <div class="card-block">
                                <div class="table-responsive">
                                    <table class="table" id="contract-table">
                                        <thead>
                                        <tr>
                                            <th>{{__('ID')}}</th>
                                            <th>{{__('Logo')}}</th>
                                            <th>{{__('Merchant')}}</th>
                                            <th>{{__('Price')}}</th>
                                            <th>{{__('Start At')}}</th>
                                            <th>{{__('End At')}}</th>
                                            <th>{{__('Created By')}}</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>
                                </div>
                            </div>
                        </section>

                    </div>
                    <div class="col-md-4">
                        <section id="spacing" class="card">
                            <div class="card-header">
                                <h4 class="card-title">
                                    {{__('Merchant Plan')}}
                                    <a class="btn btn-outline-primary" href="javascript:void(0)" onclick="urlIframe('{{route('merchant.plan.edit',$result->id)}}')"><i class="fa fa-pencil"></i> {{__('Edit')}}</a>
                                </h4>
                            </div>
                            <div class="card-body collapse in">
                                <div class="card-block">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>{{__('Value')}}</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>{{__('ID')}}</td>
                                                <td>{{$result->id}}</td>
                                            </tr>

                                            <tr>
                                                <td>{{__('Title')}}</td>
                                                <td>{{$result->title}}</td>
                                            </tr>

                                            <tr>
                                                <td>{{__('description')}}</td>
                                                <td><code>{{$result->description}}</code></td>
                                            </tr>

                                            <tr>
                                                <td>{{__('Months')}}</td>
                                                <td>{{$result->months}} {{__('Mo.')}}</td>
                                            </tr>

                                            <tr>
                                                <td>{{__('Amount')}}</td>
                                                <td>{{$result->amount}} {{__('LE')}}</td>
                                            </tr>

                                            <tr>
                                                <td>{{__('Created By')}}</td>
                                                <td>
                                                    <a href="{{url('system/staff/'.$result->staff_id)}}" target="_blank">
                                                        {{__('#ID')}}:{{$result->staff_id}} <br >{{$result->staff->firstname .' '. $result->staff->lastname}}
                                                    </a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>{{__('Service Type')}}</td>
                                                <td>
                                                    <table class="table">
                                                        <tbody>
                                                            @foreach($result->type as $value)
                                                                <tr>
                                                                    <td>{{__($value)}}</td>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>{{__('Created At')}}</td>
                                                <td>
                                                    @if($result->created_at == null)
                                                        --
                                                    @else
                                                        {{$result->created_at->diffForHumans()}}
                                                    @endif
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>{{__('Updated At')}}</td>
                                                <td>
                                                    @if($result->updated_at == null)
                                                        --
                                                    @else
                                                        {{$result->updated_at->diffForHumans()}}
                                                    @endif
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                                </div>
                            </div>
                        </section>

                    </div>



                </div>
            </div>
        </div>
    </div>

@endsection

@section('header')
@endsection;

@section('footer')
    <script type="text/javascript">
        $('#merchant-table').DataTable({
            "iDisplayLength": 25,
            processing: true,
            serverSide: true,
            "order": [[ 0, "desc" ]],
            "ajax": {
                "url": "{{url()->full()}}",
                "type": "GET",
                "data": function(data){
                    data.isMerchant = "true";
                }
            },
            columns: [
                { data: 'id', name: 'id' },
                { data: 'logo', name: 'logo' },
                { data: 'name', name: 'name' },
                { data: 'staff_firstname', name: 'staff_firstname' },
            ],
        });

        $('#contract-table').DataTable({
            "iDisplayLength": 25,
            processing: true,
            serverSide: true,
            "order": [[ 0, "desc" ]],
            "ajax": {
                "url": "{{url()->full()}}",
                "type": "GET",
                "data": function(data){
                    data.isContract= "true";
                }
            },
            columns: [
                { data: 'id', name: 'id' },
                { data: 'logo', name: 'logo' },
                { data: 'name', name: 'name' },
                { data: 'price', name: 'price' },
                { data: 'start_date', name: 'start_date' },
                { data: 'end_date', name: 'end_date' },
                { data: 'staff_firstname', name: 'staff_firstname' },
            ],
        });
    </script>
@endsection
