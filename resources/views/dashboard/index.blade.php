@extends('app')

@section('content')
    <div uk-grid uk-sticky class="head">
        <div class="left uk-width-1-2 uk-margin-bottom uk-padding-remove bg-white">
            <div class="uk-padding-small">
                <a href="{{ url('/') }}"><img src="{{ asset('assets/img/logo.png') }}" width="110"></a>
            </div>
        </div>
        <div class="right uk-width-1-2 uk-margin-bottom uk-padding-remove bg-white uk-text-right">
            <div class="uk-padding-small">

            </div>
        </div>
    </div>

    <div class="uk-container uk-margin-medium-bottom dashboard">
        <div class="uk-margin-medium">
            <div class="uk-width-1-1 uk-margin-medium-top">
                <h1 class="uk-margin-small-left">Let's select a resource</h1>
                <h2 class="uk-margin-small-left">Start to translate after selecting a resource from the following bundles.</h2>
            </div>
            <div uk-grid class="uk-margin-medium-top uk-margin-small-left">
                @foreach($bundles as $bundle)
                    @include('dashboard.bundle')
                @endforeach
            </div>
        </div>
    </div>
@endsection