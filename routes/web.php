<?php

$app->get('/', function () {
    return view('dashboard');
});

$app->get('editor', function () {
    return view('editor');
});