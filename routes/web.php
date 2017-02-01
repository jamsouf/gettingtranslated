<?php

$app->get('/', function () use ($app) {
    return view('editor');
});
