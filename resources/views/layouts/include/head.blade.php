<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @if(!$app_name)
        <title>@yield('title')</title>
    @else
        <title>@yield('title') - {{$app_name}}</title>
@endif

<!-- Styles -->
<?php
$appDetails = config('retail');
$cssLinks = [
    [
        'comment' => '<!--Import favicon-->',
        'assets' => asset('images/favicon/favicon.png'),
        'rel' => 'shortcut icon',
        'media' => '',
    ],
    [
        'comment' => '<!--Import bootstrap.css-->',
        'assets' => asset('bootstrap/css/bootstrap.css'),
        'rel' => 'stylesheet',
        'media' => "screen,projection"
    ],
    [
        'comment' => '<!--Import style.css-->',
        'assets' => asset('scss/style.css'),
        'rel' => 'stylesheet',
        'media' => '',
    ],
    [
        'comment' => '<!--summernote-lite.css-->',
        'assets' => asset('summernote-0.8.9/summernote-lite.css'),
        'rel' => 'stylesheet',
        'media' => '',
    ],
    [
        'comment' => '<!--animate.css-->',
        'assets' => asset('css/animate.css'),
        'rel' => 'stylesheet',
        'media' => '',
    ],

];
foreach ($cssLinks as $cssLink) {
    if ($cssLink['comment']) {
        echo $cssLink['comment'] . "\n";
    }

    if ($cssLink['media']) {
        echo "<link href='" . $cssLink['assets'] . '?app_version=' . $appDetails['app_version'] . "' rel='" . $cssLink['rel'] . "' media='" . $cssLink['media'] . "'>\n";
    } else {
        echo "<link href='" . $cssLink['assets'] . '?app_version=' . $appDetails['app_version'] . "' rel='" . $cssLink['rel'] . "'>\n";
    }

}
?>

<!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

</head>
