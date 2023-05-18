<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class berkatController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function menu_utama()
    {
        return view('menu_utama');
    }

    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    public function paket_atap()
    {
        return view('paket_atap');
    }

    public function paket_plaffon()
    {
        return view('paket_plaffon');
    }

    public function paket_partisi()
    {
        return view('paket_partisi');
    }

    public function A01()
    {
        return view('A01');
    }

    public function A02()
    {
        return view('A02');
    }

    public function A03()
    {
        return view('A03');
    }

    public function P01()
    {
        return view('P01');
    }

    public function P02()
    {
        return view('P02');
    }

    public function P03()
    {
        return view('P03');
    }
}
