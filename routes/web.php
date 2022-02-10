<?php

use Illuminate\Support\Facades\Route;

//Homepage
Route::get('/', function () {

    $header_links = config('header-links');

    $series = config('comics');

    $prefooter_links = config('prefooter-links');

    $footer_links = config('footer-links');

    $lower_footer_imgs = config('lower-footer-imgs');

    $data = [
        'header_links' => $header_links,
        'series' => $series,
        'prefooter_links' => $prefooter_links,
        'footer_links' => $footer_links,
        'lower_footer_imgs' => $lower_footer_imgs
    ];

    return view('home', $data);
});
