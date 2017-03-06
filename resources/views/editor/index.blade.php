@extends('app')

@section('content')
    <div uk-grid uk-sticky class="head">
        <div class="left uk-width-1-3 uk-margin-bottom uk-padding-remove bg-white">
            <div class="uk-padding-small">
                <a href="{{ url('/') }}"><img src="{{ asset('assets/img/logo.png') }}" width="110"></a>
            </div>
        </div>
        <div class="middle uk-width-1-3 uk-margin-bottom uk-padding-remove bg-white uk-text-center">
            <div class="uk-padding-small">
                <a href="{{ url('/') }}" class="uk-button uk-button-default uk-button-small uk-text-muted" title="Change resource" uk-tooltip>
                    {{ $bundle->name }} / {{ $resource->displayName }} <span uk-icon="icon: sign-out"></span>
                </a>
            </div>
        </div>
        <div class="right uk-width-1-3 uk-margin-bottom uk-padding-remove bg-white uk-text-right">
            <div class="uk-padding-small">
                <a href="#" class="uk-button uk-button-success-outline uk-button-small">
                    <span uk-icon="icon: push"></span> Save changes
                </a>
            </div>
        </div>
    </div>

    <div class="uk-container uk-container-expand">
        <div uk-grid>
            <div class="uk-width-1-2 uk-margin-medium-bottom">
                <div class="uk-margin-top uk-padding-small selection-area">
                    <form class="uk-search uk-search-default uk-width-1-1">
                        <span uk-search-icon></span>
                        <input class="uk-search-input" type="search" placeholder="Search...">
                    </form>
                    <ul class="uk-iconnav">
                        <li><a href="#" uk-icon="icon: plus" title="Add key" uk-tooltip></a></li>
                        <li><a href="#" uk-icon="icon: file-edit" title="Rename key" uk-tooltip></a></li>
                        <li><a href="#" uk-icon="icon: trash" title="Delete key" uk-tooltip></a></li>
                    </ul>
                    <div class="keys-list scrollbar-inner" style="padding-right:14px">
                        @foreach($resource->keys as $key)
                            @include('editor.key')
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="uk-width-1-2 uk-margin-medium-bottom">
                <div class="uk-margin-top uk-padding-small translation-area">
                    <form id="translation-form">
                        @include('editor.translation-first')
                        @include('editor.translation-second')
                    </form>

                    <div class="uk-text-center">
                        <a href="#" uk-icon="icon: chevron-left; ratio: 2" uk-tooltip="pos: left" title="Previous" class="prev"></a>
                        <a href="#" uk-icon="icon: chevron-right; ratio: 2" uk-tooltip="pos: right" title="Next" class="next"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            $(window).trigger('resize');
            $('.scrollbar-inner').scrollbar();
        });
    </script>
@endsection