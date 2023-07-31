@extends('layout')
@section('content')
@include('hero')
  <!-- Breadcrumb Section Begin -->

    {{-- <section class="breadcrumb-section set-bg" data-setbg="/asset/img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Checkout</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.html">Home</a>
                            <span>Checkout</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End --> --}}

    <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h6><span class="icon_tag_alt"></span> Have a coupon? <a href="#">Click here</a> to enter your code
                    </h6>
                </div>
            </div>
            <div class="checkout__form">
                <h4>Billing Details</h4>
                <form action="{{ route('addbill',['id'=>$listkh['id']]) }}" class="checkout__form" method="POSt">
                    @csrf
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                            <div class="checkout__input">
                                <p>Họ và tên<span>*</span></p>
                                <input type="text" name="HoVaTen" value="{{ $listkh['HoVaTen'] }}" readonly>
                            </div>
                            <div class="checkout__input">
                                <p>Địa chỉ<span>*</span></p>
                                <input type="text" name="DiaChi" value="{{ $listkh['DiaChi'] }}" readonly>
                            </div>
                           
                            <div class="checkout__input">
                                <p>Địa chỉ nhận hàng<span>*</span></p>
                                <input type="text" name="DiaChiNhan"  required>
                            </div>
                            
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Phone<span>*</span></p>
                                        <input type="text" name="SoDienThoai" value="{{ $listkh['SoDienThoai'] }}" readonly>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Email<span>*</span></p>
                                        <input type="text" name="Email" value="{{ $listkh['Email'] }}" readonly>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="checkout__order">
                                <h4>Your Order</h4>
                                <div class="checkout__order__products">Products <span>Total</span></div>
                                <ul>
                                    @foreach ($carts as $item)
                                    <li>{{ $item['name'] }} <span>{{ number_format($item['price']*$item['quantity']) }}</span></li>
                                    @endforeach
                                </ul>
                                <hr>
                                <div class="checkout__order__total">
                                    <ul>
                                        <li>Tổng tiền <span>@php
                                            $sum = 0;
                                            $cart = \Cart::getContent();
                                            foreach ($cart as $x) {
                                                $sum += $x['quantity'] * $x['price'];
                                            } 
                                            echo number_format($sum).' ₫';
                                        @endphp</span></li>
                                        <li>Tạm tính <span>@php echo number_format($sum).' ₫';
                                            @endphp</span></li>
                                    </ul>
                                </div>
                               
                                <button type="submit"  class="site-btn">PLACE ORDER</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Checkout Section End -->
    
    @endsection