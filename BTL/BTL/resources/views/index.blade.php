@extends('layout')
@section('content')
@include('slide')

   
   <!-- Categories Section Begin -->
   <section class="categories">
    <div class="container">
        <div class="row">
            <div class="categories__slider owl-carousel">
                @foreach ($spchay as $item)
                <div class="col-lg-3">
                    
                    <div class="categories__item set-bg" data-setbg="/asset/img/anh/{{ $item -> Anh }}">
                        <h5><a href="{{ route('shopdetails',['id'=> $item -> id]) }}">{{ $item -> TenOp }}</a></h5>
                    </div>
                    
                </div>    
                @endforeach 
            </div>
        </div>
    </div>

    
</section>
<!-- Categories Section End -->

<!-- Featured Section Begin -->
<section class="featured spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Sản phẩm nổi bật</h2>
                </div>
                <div class="featured__controls">
                    <ul>
                        <li class="active" data-filter="*">All</li>
                        <li data-filter=".oranges">Oranges</li>
                        <li data-filter=".fresh-meat">Fresh Meat</li>
                        <li data-filter=".vegetables">Vegetables</li>
                        <li data-filter=".fastfood">Fastfood</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row featured__filter">
            @foreach ($sp as $item)
            <div class="col-lg-3 col-md-4 col-sm-6 mix fresh-meat vegetables">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="/asset/img/anh/{{ $item -> Anh }}">
                        <ul class="featured__item__pic__hover">
                            <li><a href="shopdetails/{{ $item -> id }}"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                            <li>
                                <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" value="{{ $item->id }}" name="id">
                                    <input type="hidden" value="{{ $item->TenOp }}" name="tenop">
                                    <input type="hidden" value="{{ $item->Anh }}" name="image">
                                    <input type="hidden" value="{{ $item->Giaban }}"  name="giaban">
                                    <input type="hidden" value="1" name="quantity">
                                    <a href=""><button onclick="return confirm('Bạn có muốn thêm vào giỏ hàng không?')"  class="border-0 bg-transparent"><i class="fa fa-shopping-cart add_to_cart"></i></button></a>
                                    
                                </form>
                            
                            </li>
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="{{ route('shopdetails',['id'=> $item -> id]) }}">{{ $item -> TenOp }}</a></h6>
                        <h5>{{  number_format($item->Giaban, 0, ',', '.')  }} ₫</h5>
                    </div>
                    
                </div>
            </div>
            @endforeach
            
        </div>
    </div>
</section>
<!-- Featured Section End -->

<!-- Banner Begin -->
<div class="banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="banner__pic">
                    <img src="/asset/img/banner/banner-1.jpg" alt="">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="banner__pic">
                    <img src="/asset/img/banner/banner-2.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner End -->

<!-- Latest Product Section Begin -->
<section class="latest-product spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="latest-product__text">
                    <h4>Sản phẩm mới nhất</h4>
                    <div class="latest-product__slider owl-carousel">
                        <div class="latest-prdouct__slider__item">
                            @foreach ($spbanchay as $item)
                            <a href="{{ route('shopdetails',['id'=> $item -> id]) }}" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="/asset/img/anh/{{ $item -> Anh }}" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>{{ $item -> TenOp }}</h6>
                                    <span>{{  number_format($item->Giaban, 0, ',', '.')  }} ₫</span>
                                </div>
                            </a>
                            @endforeach
                        </div>
                        <div class="latest-prdouct__slider__item">
                            @foreach ($spbanchay as $item)
                            <a href="{{ route('shopdetails',['id'=> $item -> id]) }}" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="/asset/img/anh/{{ $item -> Anh }}" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>{{ $item -> TenOp }}</h6>
                                    <span>{{  number_format($item->Giaban, 0, ',', '.')  }} ₫</span>
                                </div>
                            </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="latest-product__text">
                    <h4>Sản phẩm</h4>
                    <div class="latest-product__slider owl-carousel">
                        
                        <div class="latest-prdouct__slider__item">
                            @foreach ($sp1 as $item)
                            <a href="{{ route('shopdetails',['id'=> $item -> id]) }}" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="/asset/img/anh/{{ $item -> Anh }}" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>{{ $item -> TenOp }}</h6>
                                    <span>{{  number_format($item->Giaban, 0, ',', '.')  }} ₫</span>
                                </div>
                            </a>
                            @endforeach
                        </div>
                        
                        <div class="latest-prdouct__slider__item">
                            @foreach ($sp1 as $item)
                            <a href="{{ route('shopdetails',['id'=> $item -> id]) }}" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="/asset/img/anh/{{ $item -> Anh }}" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>{{ $item -> TenOp }}</h6>
                                    <span>{{  number_format($item->Giaban, 0, ',', '.')  }} ₫</span>
                                </div>
                            </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="latest-product__text">
                    <h4>Đánh giá sản phẩm</h4>
                    <div class="latest-product__slider owl-carousel">
                        <div class="latest-prdouct__slider__item">
                            @foreach ($spchay as $item)
                            <a href="{{ route('shopdetails',['id'=> $item -> id]) }}" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="/asset/img/anh/{{ $item -> Anh }}" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>{{ $item -> TenOp }}</h6>
                                    <span>{{  number_format($item->Giaban, 0, ',', '.')  }} ₫</span>
                                </div>
                            </a>
                            @endforeach
                        </div>
                        <div class="latest-prdouct__slider__item">
                            @foreach ($spchay as $item)
                            <a href="{{ route('shopdetails',['id'=> $item -> id]) }}" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="/asset/img/anh/{{ $item -> Anh }}" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>{{ $item -> TenOp }}</h6>
                                    <span>{{  number_format($item->Giaban, 0, ',', '.')  }} ₫</span>
                                </div>
                            </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Latest Product Section End -->

<!-- Blog Section Begin -->
<section class="from-blog spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title from-blog__title">
                    <h2>From The Blog</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="blog__item">
                    <div class="blog__item__pic">
                        <img src="/asset/img/blog/blog-1.jpg" alt="">
                    </div>
                    <div class="blog__item__text">
                        <ul>
                            <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                            <li><i class="fa fa-comment-o"></i> 5</li>
                        </ul>
                        <h5><a href="#">Cooking tips make cooking simple</a></h5>
                        <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="blog__item">
                    <div class="blog__item__pic">
                        <img src="/asset/img/blog/blog-2.jpg" alt="">
                    </div>
                    <div class="blog__item__text">
                        <ul>
                            <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                            <li><i class="fa fa-comment-o"></i> 5</li>
                        </ul>
                        <h5><a href="#">6 ways to prepare breakfast for 30</a></h5>
                        <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="blog__item">
                    <div class="blog__item__pic">
                        <img src="/asset/img/blog/blog-3.jpg" alt="">
                    </div>
                    <div class="blog__item__text">
                        <ul>
                            <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                            <li><i class="fa fa-comment-o"></i> 5</li>
                        </ul>
                        <h5><a href="#">Visit the clean farm in the US</a></h5>
                        <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog Section End -->
@endsection