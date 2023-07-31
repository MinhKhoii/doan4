 @extends('layout')
 @section('content')
 @include('hero')
 
 <!-- Breadcrumb Section Begin -->
 {{-- <section class="breadcrumb-section set-bg" data-setbg="/asset/img/breadcrumb.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Vegetable’s Package</h2>
                    <div class="breadcrumb__option">
                        <a href={{ route('home')}}>Home</a>
                        <a href={{ route('home')}}>Vegetables</a>
                        <span>Vegetable’s Package</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!-- Breadcrumb Section End -->

<!-- Product Details Section Begin -->
<section class="product-details spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="product__details__pic">
                    <div class="product__details__pic__item">
                        <img class="product__details__pic__item--large"
                            src="/asset/img/anh/{{ $sp ->Anh }}" alt="">
                    </div>
                    <div class="product__details__pic__slider owl-carousel">
                        <img data-imgbigurl="/asset/img/anh/{{ $sp ->Anh }}"
                            src="/asset/img/anh/{{ $sp ->Anh }}" alt="">
                        <img data-imgbigurl="/asset/img/product/details/product-details-3.jpg"
                            src="/asset/img/anh/{{ $sp ->Anh }}" alt="">
                        <img data-imgbigurl="/asset/img/anh/{{ $sp ->Anh }}"
                            src="/asset/img/anh/{{ $sp ->Anh }}" alt="">
                        <img data-imgbigurl="/asset/img/anh/{{ $sp ->Anh }}"
                            src="/asset/img/anh/{{ $sp ->Anh }}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="product__details__text">
                    <h3>{{ $sp->TenOp }}</h3>
                    <div class="product__details__rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                        <span>(18 reviews)</span>
                    </div>
                    <div class="product__details__price">{{ number_format($sp->Giaban, 0, ',', '.') }} ₫</div>
                    <p>{!!$sp->MoTa!!}</p>
                   
                        <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" value="{{ $sp->id }}" name="id">
                            <input type="hidden" value="{{ $sp->TenOp }}" name="tenop">
                            <input type="hidden" value="{{ $sp->Anh }}" name="image">
                            <input type="hidden" value="{{ $sp->Giaban }}"  name="giaban">
                            <input type="hidden" value="1" name="quantity">
                            <a href="" class="primary-btn" ><button onclick="return confirm('Bạn có muốn thêm vào giỏ hàng không?')"  class="border-0 bg-transparent">ADD TO CARD</button></a>
                            <a href="#" class="heart-icon"><span class="icon_heart_alt"></span></a>
                        </form>
                    {{-- <a href="#" class="primary-btn">ADD TO CARD</a> --}}
                    
                    <ul>
                        <li><b>Sẵn sàng</b> <span>Trong kho</span></li>
                        <li><b>Vận chuyển</b> <span>1 ngày vận chuyển. </li>
                        <li><b>Trọng lượng</b> <span>0.5 kg</span></li>
                        <li><b>Chia sẻ trên</b>
                            <div class="share">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="product__details__tab">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab"
                                aria-selected="true">Mô tả</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab"
                                aria-selected="false">Thông tin</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab"
                                aria-selected="false">Nhận xét <span>(1)</span></a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tabs-1" role="tabpanel">
                            <div class="product__details__tab__desc">
                                <h6>Thông tin sản phẩm</h6>
                                <p>Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.
                                    Pellentesque in ipsum id orci porta dapibus. Proin eget tortor risus. Vivamus
                                    suscipit tortor eget felis porttitor volutpat. Vestibulum ac diam sit amet quam
                                    vehicula elementum sed sit amet dui. Donec rutrum congue leo eget malesuada.
                                    Vivamus suscipit tortor eget felis porttitor volutpat. Curabitur arcu erat,
                                    accumsan id imperdiet et, porttitor at sem. Praesent sapien massa, convallis a
                                    pellentesque nec, egestas non nisi. Vestibulum ac diam sit amet quam vehicula
                                    elementum sed sit amet dui. Vestibulum ante ipsum primis in faucibus orci luctus
                                    et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam
                                    vel, ullamcorper sit amet ligula. Proin eget tortor risus.</p>
                                    <p>Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Lorem
                                    ipsum dolor sit amet, consectetur adipiscing elit. Mauris blandit aliquet
                                    elit, eget tincidunt nibh pulvinar a. Cras ultricies ligula sed magna dictum
                                    porta. Cras ultricies ligula sed magna dictum porta. Sed porttitor lectus
                                    nibh. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.
                                    Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Sed
                                    porttitor lectus nibh. Vestibulum ac diam sit amet quam vehicula elementum
                                    sed sit amet dui. Proin eget tortor risus.</p>
                            </div>
                        </div>
                        <div class="tab-pane" id="tabs-2" role="tabpanel">
                            <div class="product__details__tab__desc">
                                <h6>Products Infomation</h6>
                                <p>Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.
                                    Pellentesque in ipsum id orci porta dapibus. Proin eget tortor risus.
                                    Vivamus suscipit tortor eget felis porttitor volutpat. Vestibulum ac diam
                                    sit amet quam vehicula elementum sed sit amet dui. Donec rutrum congue leo
                                    eget malesuada. Vivamus suscipit tortor eget felis porttitor volutpat.
                                    Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Praesent
                                    sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum ac
                                    diam sit amet quam vehicula elementum sed sit amet dui. Vestibulum ante
                                    ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
                                    Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.
                                    Proin eget tortor risus.</p>
                                <p>Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Lorem
                                    ipsum dolor sit amet, consectetur adipiscing elit. Mauris blandit aliquet
                                    elit, eget tincidunt nibh pulvinar a. Cras ultricies ligula sed magna dictum
                                    porta. Cras ultricies ligula sed magna dictum porta. Sed porttitor lectus
                                    nibh. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.</p>
                            </div>
                        </div>
                        <div class="tab-pane" id="tabs-3" role="tabpanel">
                            <div class="product__details__tab__desc">
                                <h6>Products Infomation</h6>
                                <p>Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.
                                    Pellentesque in ipsum id orci porta dapibus. Proin eget tortor risus.
                                    Vivamus suscipit tortor eget felis porttitor volutpat. Vestibulum ac diam
                                    sit amet quam vehicula elementum sed sit amet dui. Donec rutrum congue leo
                                    eget malesuada. Vivamus suscipit tortor eget felis porttitor volutpat.
                                    Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Praesent
                                    sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum ac
                                    diam sit amet quam vehicula elementum sed sit amet dui. Vestibulum ante
                                    ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
                                    Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.
                                    Proin eget tortor risus.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Product Details Section End -->

<!-- Related Product Section Begin -->
<section class="related-product">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title related__product__title">
                    <h2>Sản phẩm liên quan</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($sp1 as $item)
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product__item">
                    <div class="product__item__pic set-bg" data-setbg="/asset/img/anh/{{ $item -> Anh }}">
                        <ul class="product__item__pic__hover">
                            <li><a href="{{ $item -> id }}"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                            <li>
                                <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" value="{{ $item->id }}" name="id">
                                    <input type="hidden" value="{{ $item->TenOp }}" name="tenop">
                                    <input type="hidden" value="{{ $item->Anh }}" name="image">
                                    <input type="hidden" value="{{ $item->Giaban }}"  name="giaban">
                                    <input type="hidden" value="1" name="quantity">
                                    <a href=""><button onclick="return confirm('Bạn có muốn thêm vào giỏ hàng không?')" class="border-0 bg-transparent"><i class="fa fa-shopping-cart add_to_cart"></i></button></a>
                                    
                                </form>
                            
                            </li>
                        </ul>
                    </div>
                    <div class="product__item__text">
                        <h6><a href="{{ route('shopdetails',['id'=> $item -> id]) }}">{{ $item -> TenOp }}</a></h6>
                        <h5>{{ number_format($item->Giaban, 0, ',', '.') }} ₫</h5>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        
    </div>
</section>
<!-- Related Product Section End -->
@endsection