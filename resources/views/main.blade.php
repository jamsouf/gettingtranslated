<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Web-based Translation Editor</title>
    <link rel="stylesheet" href="{{ asset('libs/uikit/css/uikit.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/default.css') }}">
    <script src="{{ asset('libs/vue/vue.min.js') }}"></script>
    <script src="{{ asset('libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('libs/uikit/js/uikit.min.js') }}"></script>
</head>
<body>

<div uk-grid uk-sticky>
    <div class="uk-width-1-1 uk-margin-bottom uk-padding-remove bg-white clr-dark">
        <div class="uk-padding-small">
            <a href="{{ url('/') }}"><img src="{{ asset('assets/img/logo.png') }}"></a>
        </div>
    </div>
</div>

<div class="uk-container">
    <div uk-grid class="uk-grid-match">
        <div class="uk-width-1-2">
            <div class="uk-margin-top uk-margin-bottom uk-padding-small area">
                Selection
            </div>
        </div>
        <div class="uk-width-1-2">
            <div class="uk-margin-top uk-margin-bottom uk-padding-small area">
                Translation
            </div>
        </div>
    </div>
</div>

</body>
</html>