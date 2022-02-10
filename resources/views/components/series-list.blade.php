<section class="current_series_wrapper w_100">
    <div class="container">
        <div class="row row-cols-1">
            <div class="col">
                <div class="series_container w-100 h-100 pt_45 pb_125 position-relative">
                    <a class="btn up fs_20 position-absolute" href="#">current series</a>
                    <div class="series_main_wrapper d_flex flex_wrap">
                        @forelse($series as $single_series)
                            <div class="single_series_wrapper p_10">
                                <div class="thumb_wrapper w_200p h_200p">
                                    <img src="{{$single_series['thumb']}}" alt="{{'Immagine di ' . $single_series['title']}}">
                                </div>
                                <h3 class="mt_10 fs_15">{{$single_series['title']}}</h3>
                            </div>
                        @empty
                            <h2>No series were found</h2>
                        @endforelse
                    </div>
                    <a class="btn down fs_15 position_absolute" href="#">load more</a>
                </div>
            </div>
        </div>
    </div>
</section>