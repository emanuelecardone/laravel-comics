@extends('layouts.app')

@section('page_title')
Series info
@endsection

@section('main_content')
    <section class="banner w-100">

    </section>

    <section class="single_series_wrapper w-100 text-dark py-5">
        <div class="container">
            <div class="row row-cols-1">
                <div class="col">
                    <section class="series_info w-100 d-flex flex-column justify-content-center align-items-center">
                        <h2>{{$series_info['title']}}</h2>
                        <h3>U.S. Price{{$series_info['price']}}</h3>
                        <p>{{$series_info['description']}}</p>
                        <div class="w-100 mt-5 d-flex">
                            <div class="talent w-50">
                                <h3 class="text-uppercase">talent</h3>
                                <div class="w-100 d-flex mb-2">
                                    <div class="w_20 h-100">
                                        <h4>art by</h4>
                                    </div>
                                    <div class="w_80 h-100">
                                        <ul class="d-flex flex-wrap p-0 m-0">
                                            @forelse($series_info['artists'] as $artist) 
                                                <li class="me-2">
                                                    @if(!$loop->last)
                                                        {{$artist . ','}}
                                                    @else
                                                        {{$artist}}
                                                    @endif
                                                </li>
                                            @empty
                                                <h3>No artists were found</h3>
                                            @endforelse
                                        </ul>
                                    </div>
                                </div>
                                <div class="w-100 d-flex">
                                    <div class="w_20 h-100">
                                        <h4>written by</h4>
                                    </div>
                                    <div class="w_80 h-100">
                                        <ul class="d-flex flex-wrap p-0 m-0">
                                            @forelse($series_info['writers'] as $writer) 
                                                <li class="me-2">
                                                    @if(!$loop->last)
                                                        {{$writer . ','}}
                                                    @else
                                                        {{$writer}}
                                                    @endif
                                                </li>
                                            @empty
                                                <h3>No writers were found</h3>
                                            @endforelse
                                        </ul>
                                    </div>
                                </div>
                            </div>
                
                            <div class="specs w-50">
                                <h3 class="text-uppercase">specs</h3>
                                <div class="w-100 d-flex">
                                    <div class="w_20 h-100">
                                        <h4>series:</h4>
                                    </div>
                                    <div class="w_80 h-100">
                                        {{$series_info['series']}}
                                    </div>
                                </div>
                                <div class="w-100 d-flex">
                                    <div class="w_20 h-100">
                                        <h4>U.S. Price:</h4>
                                    </div>
                                    <div class="w_80 h-100">
                                        {{$series_info['price']}}
                                    </div>
                                </div>
                                <div class="w-100 d-flex">
                                    <div class="w_20 h-100">
                                        <h4>On Sale Date:</h4>
                                    </div>
                                    <div class="w_80 h-100">
                                        {{$series_info['sale_date']}}
                                    </div>
                                </div>                      
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>    
    </section>

@endsection