<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gettranslated: Web-based Translation Editor for Localization</title>
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('libs/uikit/css/uikit.min.css') }}">
    <link rel="stylesheet" href="{{ asset('libs/jquery/jquery.scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/default.css') }}">
    <script src="{{ asset('libs/vue/vue.min.js') }}"></script>
    <script src="{{ asset('libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('libs/jquery/jquery.scrollbar.min.js') }}"></script>
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
            <span uk-icon="icon: warning"></span>
            <span class="uk-label uk-label-warning uk-text-middle">Unsaved changes</span>
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
                <div class="uk-margin-small">
                    <a href="#" title="Select a bundle" uk-tooltip="pos: bottom"><span class="uk-icon-link uk-margin-small-right" uk-icon="icon: folder"></span></a>
                    <a href="#"><span class="uk-label uk-label-red-dark">myproject</span></a>
                </div>
                <div class="uk-margin-small">
                    <a href="#" title="Select a resource" uk-tooltip="pos: bottom"><span class="uk-icon-link uk-margin-small-right" uk-icon="icon: file"></span></a>
                    <a href="#"><span class="uk-label uk-label-red-light">website</span></a>
                    <a href="#"><span class="uk-label uk-label-red-light">offer</span></a>
                </div>
                <div class="keys-list scrollbar-inner" style="padding-right:14px">
                    <a href="#" class="resource-key">
                        <div class="key">email</div>
                        <div class="text">Email</div>
                    </a>
                    <a href="#" class="resource-key">
                        <div class="key">page_title_company</div>
                        <div class="text">Company</div>
                    </a>
                    <a href="#" class="resource-key">
                        <div class="key">no_results_found</div>
                        <div class="text">Sorry, no results were found.</div>
                    </a>
                    <a href="#" class="resource-key">
                        <div class="key">special_offers</div>
                        <div class="text">Special Offers</div>
                    </a>
                    <a href="#" class="resource-key active">
                        <div class="key">following_fields_required</div>
                        <div class="text">The following fields are required:</div>
                    </a>
                    <a href="#" class="resource-key">
                        <div class="key">newsletter_join</div>
                        <div class="text">Join our Newsletter</div>
                    </a>
                    <a href="#" class="resource-key">
                        <div class="key">update_profile_success</div>
                        <div class="text">Thank you, your data has been successfully updated</div>
                    </a>
                    <a href="#" class="resource-key">
                        <div class="key">first_name</div>
                        <div class="text">First Name</div>
                    </a>
                    <a href="#" class="resource-key">
                        <div class="key">email</div>
                        <div class="text">Email</div>
                    </a>
                    <a href="#" class="resource-key">
                        <div class="key">page_title_company</div>
                        <div class="text">Company</div>
                    </a>
                    <a href="#" class="resource-key">
                        <div class="key">no_results_found</div>
                        <div class="text">Sorry, no results were found.</div>
                    </a>
                    <a href="#" class="resource-key">
                        <div class="key">special_offers</div>
                        <div class="text">Special Offers</div>
                    </a>
                    <a href="#" class="resource-key">
                        <div class="key">following_fields_required</div>
                        <div class="text">The following fields are required:</div>
                    </a>
                    <a href="#" class="resource-key">
                        <div class="key">newsletter_join</div>
                        <div class="text">Join our Newsletter</div>
                    </a>
                </div>
            </div>
        </div>
        <div class="uk-width-1-2 uk-margin-medium-bottom">
            <div class="uk-margin-top uk-padding-small translation-area">
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
                    <textarea id="translation-first" class="uk-textarea">The following fields are required:</textarea>

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
                    <textarea id="translation-second" class="uk-textarea">Die folgenden Felder müssen ausgefüllt werden:</textarea>
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
        $('.scrollbar-inner').scrollbar();
    });
</script>

</body>
</html>