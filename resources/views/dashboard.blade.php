<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gettranslated: Web-based Translation Editor for Localization</title>
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('libs/uikit/css/uikit.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/default.css') }}">
    <script src="{{ asset('libs/vue/vue.min.js') }}"></script>
    <script src="{{ asset('libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('libs/uikit/js/uikit.min.js') }}"></script>
</head>
<body>

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
            <div class="resource-selection uk-margin-large-right">
                <h3>webapp</h3>
                <a href="{{ url('editor') }}">website</a>
                <a href="{{ url('editor') }}{{ url('editor') }}">offer</a>
                <a href="{{ url('editor') }}">newsletter</a>
            </div>
            <div class="resource-selection uk-margin-large-right">
                <h3>master project</h3>
                <a href="{{ url('editor') }}">abstract</a>
                <a href="{{ url('editor') }}">sample-source</a>
            </div>
            <div class="resource-selection uk-margin-large-right">
                <h3>ui-ux-blog</h3>
                <a href="{{ url('editor') }}{{ url('editor') }}">interface</a>
                <a href="{{ url('editor') }}">design</a>
                <a href="{{ url('editor') }}">web</a>
                <a href="{{ url('editor') }}">mobile</a>
                <a href="{{ url('editor') }}">blog</a>
                <a href="{{ url('editor') }}">website</a>
                <a href="{{ url('editor') }}">wiki</a>
            </div>
        </div>
    </div>
</div>

</body>
</html>