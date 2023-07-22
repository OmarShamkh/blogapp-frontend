@extends('layout')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('404 Error') }}</div>

                    <div class="card-body">
                        <p>{{ __('Sorry, the page you are looking for could not be found.') }}</p>
                        <a href="{{ url('/blog') }}">{{ __('Back to Home') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection