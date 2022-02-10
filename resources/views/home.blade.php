@extends('layouts.app')

@section('page_title')
DC Comics
@endsection

@section('main_content')
    <section class="banner w-100">

    </section>

    @include('components.series-list', $series)

@endsection