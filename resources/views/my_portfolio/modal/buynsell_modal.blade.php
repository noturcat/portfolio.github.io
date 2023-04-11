<div class="modal fade delete-modal" id="buynsellModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg modal-notify modal-danger" role="document">
        <!--Content-->
        <div class="modal-content text-center">
        <!--Header-->
            <div class="modal-header d-flex justify-content-between">
                    <div class="img-cont">
                        <img src="{{asset('images/BuyNSellLogo.png')}} " alt="" class="img-fluid" width="250" height="250" >
                    </div>
                <p class="heading ">
                    <h4>Buy N' Sell</h4></p>
                <div type="button" class="close d-flex float-end" data-bs-dismiss="modal" aria-label="Close">
                    {{-- <img src="{{ asset('images/close-circle-svgrepo-com.svg') }}" alt="" class="img-fluid" style="width:40px;"> --}}
                    X
                </div>
            </div>
            
            <!--Body-->
            <div class="modal-body">
                <i class="fas fa-spinner fa-spin"><img src="" alt="" class="img-fluid"></i>
                <div class="swiper mySwiper2 d-flex">
                    <div class="swiper-wrapper d-flex align-items-center">
                        <div class="swiper-slide">
                            <div class="container">
                                <h3>
                                    Buy N' Sell is an E-commerce Web Based Application that is created using Laravel, 
                                    HTML5, CSS, SASS, Bootstrap, JavaScript.
                                </h3>
                            </div>
                            
                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <div class="card-image d-flex justify-content-center align-items-center"><img src="{{asset('images/modal/Screenshot_210.png')}}" alt="" class="img-fluid"></div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <div class="card-image d-flex justify-content-center align-items-center"><img src="{{asset('images/modal/Screenshot_211.png')}}" alt="" class="img-fluid"></div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <div class="card-image d-flex justify-content-center align-items-center"><img src="{{asset('images/modal/Screenshot_212.png')}}" alt="" class="img-fluid"></div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <div class="card-image d-flex justify-content-center align-items-center"><img src="{{asset('images/modal/Screenshot_213.png')}}" alt="" class="img-fluid"></div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
</div>

