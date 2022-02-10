<section class="prefooter_section w-100 h_150p d_flex justify-content-center align_items_center">
    <div class="container">
        <ul class="d-flex px_40">
            @forelse($prefooter_links as $prefooter_link)
                <li class="d_flex justify_content_between align_items_center">
                    <img class="w_50p h_70p" src="{{asset('images/' . $prefooter_link['img'])}}" :alt="'Immagine di' . $prefooter_link['text']">
                    <a href="#">{{$prefooter_link['text']}}</a>
                </li>
            @empty

            @endforelse
        </ul>   
    </div>
</section>