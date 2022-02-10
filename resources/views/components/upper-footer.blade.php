<section class="upper_footer_wrapper">
    <div class="container h-100">
        <div class="row h-100">
            <div class="col-5">
                <div class="upper_footer_subwrapper left w-100 d-flex flex-column flex-wrap align-items-start">

                    @foreach($footer_links as $footer_link)
                        <div class="footer_list_wrapper h_{{$footer_link['height']}}">
                            <div class="footer_list_subwrapper">
                                <h2 class="text-uppercase mb_20">{{$footer_link['title']}}</h2>
                                <ul class="p-0 m-0">
                                    @foreach($footer_link['links'] as $single_link)
                                        <li>
                                            <a href="#">{{$single_link['name']}}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="offset-2 col-5">
                <div class="upper_footer_subwrapper right w-100 h-100">
            
                </div>
            </div>
        </div>
    </div>
</section>