<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index() {
        return view('frontend.index');
    }

    public function cart() {
        return view('frontend.cart');
    }

    public function checkout() {
        return view('frontend.checkout');
    }

    public function contact() {
        return view('frontend.contact');
    }

    public function login() {
        return view('frontend.login');
    }

    public function myAccount() {
        return view('frontend.my-account');
    }

    public function productDetail() {
        return view('frontend.product-detail');
    }

    public function productList() {
        return view('frontend.product-list');
    }

    public function wishlist() {
        return view('frontend.wishlist');
    }
}
