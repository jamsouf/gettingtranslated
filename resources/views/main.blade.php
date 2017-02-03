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

<div uk-grid uk-sticky>
    <div class="uk-width-1-1 uk-margin-bottom uk-padding-remove bg-white clr-dark">
        <div class="uk-padding-small">
            <a href="{{ url('/') }}"><img src="{{ asset('assets/img/logo.png') }}" width="110"></a>
        </div>
    </div>
</div>

<div class="uk-container uk-container-expand">
    <div uk-grid class="uk-grid-match">
        <div class="uk-width-1-2">
            <div class="uk-margin-top uk-margin-bottom uk-padding-small selection-area">
                <form class="uk-search uk-search-default uk-width-1-1">
                    <span uk-search-icon></span>
                    <input class="uk-search-input" type="search" placeholder="Search...">
                </form>
                <div class="uk-margin-small">
                    <a href="#" title="Select a bundle" uk-tooltip="pos: bottom"><span class="uk-icon-link uk-margin-small-right" uk-icon="icon: folder"></span></a>
                    <a href="#"><span class="uk-label uk-label-red-dark">myproject</span></a>
                </div>
                <div class="uk-margin-small">
                    <a href="#" title="Select a resource" uk-tooltip="pos: bottom"><span class="uk-icon-link uk-margin-small-right" uk-icon="icon: file"></span></a>
                    <a href="#"><span class="uk-label uk-label-red-light">website.php</span></a>
                    <a href="#"><span class="uk-label uk-label-red-light">offer.php</span></a>
                </div>
            </div>
        </div>
        <div class="uk-width-1-2">
            <div class="uk-margin-top uk-margin-bottom uk-padding-small translation-area">
                <form id="translation-form">
                    <div uk-form-custom="target: > * > span:last">
                        <select>
                            <option value="1">English</option>
                            <option value="2">German</option>
                            <option value="3">French</option>
                            <option value="4">Turkish</option>
                        </select>
                        <span class="uk-link">
                            <span uk-icon="icon: triangle-down"></span>
                            <span></span>
                        </span>
                    </div>
                    <textarea id="translation-first" class="uk-textarea">Hello, please signup go get the latest arrivals and special offers.</textarea>

                    <div uk-form-custom="target: > * > span:last">
                        <select>
                            <option value="1">German</option>
                            <option value="2">English</option>
                            <option value="3">French</option>
                            <option value="4">Turkish</option>
                        </select>
                        <span class="uk-link">
                            <span uk-icon="icon: triangle-down"></span>
                            <span></span>
                        </span>
                    </div>
                    <textarea id="translation-second" class="uk-textarea">Hallo, bitte melden Sie sich an um die neuesten Inserate und Sonderangebote zu erhalten.</textarea>
                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>