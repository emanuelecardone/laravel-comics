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
})->name('home');

// Single series
Route::get('/series/{id}', function($id){

    $series = config('comics');
    $series_to_show = false;
    $header_links = config('header-links');
    $prefooter_links = config('prefooter-links');
    $footer_links = config('footer-links');
    $lower_footer_imgs = config('lower-footer-imgs');

    foreach($series as $single_series) {
        if($single_series['id'] == $id) {
            $series_to_show = $single_series;
        }
    }

    if(!$series_to_show) {
        abort('404');
    }

    $data = [
        'header_links' => $header_links,
        'prefooter_links' => $prefooter_links,
        'footer_links' => $footer_links,
        'lower_footer_imgs' => $lower_footer_imgs,
        'series_info' => $series_to_show
    ];

    return view('series', $data);
})->name('series');