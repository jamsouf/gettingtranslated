<?php

$app->get('/', 'DashboardController@index');
$app->get('editor/{bundle}/{resource}', 'EditorController@index');