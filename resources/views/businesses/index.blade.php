@extends('layouts.master')

@section('title')

    @endsection

@section('meta')
    <meta name="Description" content=""/>
    <meta name="Keywords" content=""/>
    @endsection

@section('content')
        {{--End of row--}}
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr class="text-purple">
                                <th>#</th>
                                <th>Businesses Name</th>
                                <th>Business of the Company</th>
                                <th>State</th>
                                <th>City</th>
                                <th>Locality</th>
                                <th>Email-Id</th>
                                <th>Phone No</th>
                                <th>Name of the Promoter/ Entrepreneurs</th>
                                <th>Name of 2 or more directors</th>
                                <th>Turnover (Last Fiscal)</th>
                                <th>Key issues faced (Not more than 100 words)</th>
                                <th>Preferred time for meeting Business Doctors</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($business as $business)
                                <tr>
                                    <td>{{ $business->id }}</td>
                                    <td>{{ $business->c_name }}</td>
                                    <td>{{ $business->b_of_company}}</td>
                                    <td>{{ $business->c_state}}</td>
                                    <td>{{ $business->c_city }}</td>
                                    <td>{{ $business->c_locality }}</td>
                                    <td>{{ $business->email}}</td>
                                    <td>{{ $business->phone}}</td>
                                    <td>{{ $business->name_entrepreneur}}</td>
                                    <td>{{ $business->name_director}}</td>
                                    <td>{{ $business->turnover}}</td>
                                    <td>{{ $business->key_issue}}</td>
                                    <td>{{ $business->meeting}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="text-center">

                    </div>
                </div>
            </div>
        </div>
@endsection