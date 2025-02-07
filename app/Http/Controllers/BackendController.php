<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackendController extends Controller
{
    public function index() {
        return view('backend.index');
    }

    public function login() {
        return view('backend.login');
    }

    public function register() {
        return view('backend.register');
    }

    public function layoutStatic() {
        return view('backend.layout-static');
    }

    public function layoutSidenavLight() {
        return view('backend.layout-sidenav-light');
    }

    public function charts() {
        return view('backend.charts');
    }

    public function tables() {
        return view('backend.tables');
    }

    public function password() {
        return view('backend.password');
    }

    public function error401() {
        return view('backend.401');
    }

    public function error404() {
        return view('backend.404');
    }

    public function error500() {
        return view('backend.500');
    }
}
