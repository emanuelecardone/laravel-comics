<header class="w-100 d-flex flex-column justify-content-center align-items-center">

    <div class="upper_header w-100 h_50p d-flex justify-content-center align-items-center">
        <div class="container">
            <div class="row">
                <div class="offset-8 col-2">
                    <div class="upper_header_link_wrapper w-100 h-100 d-flex justify-content-end align-items-center">
                        DC POWER VISA
                    </div>
                </div>
                <div class="col-2">
                    <div class="upper_header_link_wrapper w-100 h-100 d-flex justify-content-end align-items-center">
                        ADDITIONAL DC SITES
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="lower_header w-100 d-flex justify-content-center align-items-center">
        <div class="container">
            <div class="row gx-5">
                <div class="col-2">
                    <div class="header_logo_wrapper w-100 h-100 d-flex align-items-center">
                        <img class="w_80p" src="{{asset('images/dc-logo.png')}}" alt="Logo DC">
                    </div>
                </div>
                <div class="col-8">
                    <div class="header_links_wrapper w-100 h-100 d-flex justify-content-end align-items-center">
                        <ul class="h-100 p-0 m-0">
                            @foreach($header_links as $link)
                                <li>
                                    <a class="{{ $link['current'] ? 'current' : '' }} d-inline-block" href="#">{{$link['text']}}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-2">
                    <div class="search_wrapper w-100 h-100 d-flex justify-content-center align-items-center">
                        <div class="search_subwrapper w-50 d-flex justify-content-end">
                            Search
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</header>