<div class="lower_footer_wrapper w_100 d_flex align_items_center">
    <div class="container">
        <div class="row">
            <div class="col-2">
                <div class="lower_footer_button_wrapper w-100 h-100">
                    <a class="sign_up" href="#">sign-up now!</a>
                </div>
            </div>
            <div class="offset-5 col-5">
                <div class="lower_footer_right w-100 h-100 d_flex align_items_center">
                    <h2 class="me_35">follow us</h2>
                    <ul class="p-0 m-0">
                        @foreach($lower_footer_imgs as $footer_img)
                            <li>
                                <a href="#">
                                    <img src="{{asset('images/footer-' . $footer_img['img'] . '.png')}}" alt="{{'Logo di ' . $footer_img['img']}}">
                                </a>
                            </li>
                        @endforeach
                        
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>