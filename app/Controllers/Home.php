<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('home');
    }

    public function coming(): string
    {
        return view('coming');
    }

    public function service(): string
    {
        return view('service');
    }

    public function detail_about_us(): string
    {
        return view('detail-about-us');
    }

    public function probono(): string
    {
        return view('layanan-hukum-probono');
    }
    public function litigasi(): string
    {
        return view('layanan-hukum-litigasi');
    }
    public function keluarga(): string
    {
        return view('layanan-hukum-keluarga');
    }
    public function korporasi(): string
    {
        return view('layanan-hukum-korporasi');
    }
    public function properti(): string
    {
        return view('layanan-hukum-properti');
    }
    public function regulasi(): string
    {
        return view('layanan-hukum-regulasi');
    }
}
