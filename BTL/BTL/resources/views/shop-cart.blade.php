@extends('layout')
@section('content')
@include('hero')
    {{-- <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="/asset/img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Shopping Cart</h2>
                        <div class="breadcrumb__option">
                            <a href={{ route('home') }}>Home</a>
                            <span>Shopping Cart</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End --> --}}

    <!-- Shoping Cart Section Begin -->
    <section class="shoping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th class="shoping__product">Sản phẩm</th>
                                    <th>Giá</th>
                                    <th>Số lượng</th>
                                    <th>Tạm tính</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cartItems as $item)
                                <tr>
                                    <td class="shoping__cart__item">
                                        <img class="w-25" src="/asset/img/anh/{{ $item->attributes->image }}" alt="">
                                        <h5>{{ $item ->name }}</h5>
                                    </td>
                                    <td class="shoping__cart__price">
                                        {{ number_format($item->price, 0, ',', '.') }} ₫
                                    </td>   
                                    <td class="shoping__cart__quantity">
                                        
                                            <form action="{{ route('cart.update') }}" method="POST">
                                                @csrf
                                                <input  type="hidden" name="id" value="{{ $item->id}}" >
                                                <div class="pro-qty">
                                                    <input class="input-text" type="number" min="1" name="quantity" value="{{ $item->quantity }}" >
                                                </div>
                                                <button type="submit" class="px-2 pb-2 ml-2 btn btn-danger">update</button>
                                              </form>
                                      
                                        
                                    </td>
                                    
                                    <td class="shoping__cart__total">
                                        {{ number_format($item->price*$item->quantity, 0, ',', '.') }} ₫
                                    </td>
                                    <td class="shoping__cart__item__close">
                                        <form action="{{ route('cart.remove') }}" method="POST">
                                            @csrf
                                            <input type="hidden" value="{{ $item->id }}" name="id">
                                            <button  onclick="return confirm('Bạn có muốn xóa không?')" class="px-4 py-2 bg-red-600">Xóa</button>
                                        </form>
                                    </td>
                                </tr>                              
                                @endforeach                       
                            </tbody>
                        </table>
                        <form   action="{{ route('cart.clear') }}" method="POST">
                            @csrf
                            <button style="float: right; margin-top: 10px;" class="px-6 py-2 text-red-800 bg-red-300">Xóa tất cả giỏ hàng</button>
                        </form>
                        @if ($message = Session::get('success'))
                        <div class="p-4 mb-3 bg-green-400 rounded">
                            <p class="text-green-800">{{ $message }}</p>
                        </div>
                    @endif   
                    </div>
                </div>
            </div>
                            <hr>
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__btns">
                        <a href="#" class="primary-btn cart-btn">CONTINUE SHOPPING</a>
                        <a href="#" class="primary-btn cart-btn cart-btn-right"><span class="icon_loading"></span>
                            Upadate Cart</a>
                            
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="shoping__continue">
                        <div class="shoping__discount">
                            <h5>Discount Codes</h5>
                            <form action="#">
                                <input type="text" placeholder="Enter your coupon code">
                                <button type="submit" class="site-btn">APPLY COUPON</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="shoping__checkout">
                        <h5>Cart Total</h5>
                        
                        <ul>
                            @php
                                $sum =0;
                              $list = \Cart::getContent();
                              foreach ($list as $key => $value) {
                                $sum += $value["quantity"] * $value["price"];
                              }
                             
                            @endphp
                            <li>Tổng giá <span>@php echo number_format($sum)." ₫"  @endphp</span></li>
                            <li>Tạm tính <span>@php echo number_format($sum)." ₫"  @endphp</span></li>
                        </ul>
                        <a href="{{ route ('checkout')}}" class="primary-btn">PROCEED TO CHECKOUT</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shoping Cart Section End -->
    @endsection