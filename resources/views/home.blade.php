@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

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
    <link rel="stylesheet" href ="{{ asset('resources/css/app.css')}}">
    <link rel="stylesheet" href="{{ asset('resources/js/app.js') }}">
    <link rel="stylesheet" href="{{ asset('resources/css/normalize.css') }}">
	<link rel="stylesheet" href="{{ asset('resources/css/framework.css') }}">
	<link rel="stylesheet" href="{{ asset('resources/css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('resources/css/responsive.css') }}">
@endsection
