<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sanpham;

class CartController extends Controller
{
    //
    public function cartList()
    {
        $cartItems = \Cart::getContent();
        return view('shop-cart', ['cartItems'=>$cartItems]);
    }


    public function addToCart(Request $request)
    {
        \Cart::add([
            'id' => $request->id,
            'name' => $request->input('tenop'),
            'price' => $request->input('giaban'),
            'quantity' => $request->quantity,
            'attributes' => array(
                'image' => $request->input('image'),
            )

        ]);
        session()->flash('success', 'Sản phẩm được thêm vào giỏ hàng thành công !');

        return redirect()->route('cart.list');
    }

    public function updateCart(Request $request)
    {
        \Cart::update(
            $request->id,
            [
                'quantity' => [
                    'relative' => false,
                    'value' => $request->quantity
                ],
            ]
        );

        session()->flash('success', 'Giỏ hàng được cập nhật thành công !');

        return redirect()->route('cart.list');
    }

    public function removeCart(Request $request)
    {
        \Cart::remove($request->id);
        session()->flash('success', 'Xóa sản phẩm thành công !');

        return redirect()->route('cart.list');
    }

    public function clearAllCart()
    {
        \Cart::clear();

        session()->flash('success', 'Xóa tất cả giỏ hàng thành công !');

        return redirect()->route('cart.list');
    }
}
