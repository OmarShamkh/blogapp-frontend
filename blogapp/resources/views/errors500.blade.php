@extends('layout')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('500 Error') }}</div>

                    <div class="card-body">
                        <p>{{ __('Sorry, something went wrong on our end. Please try again later.') }}</p>
                        <a href="{{ url('/blog') }}">{{ __('Back to Home') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection