<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChirpController extends Controller
{
    public function index()
    {
        $chirps = [
            [
                "author" => "Hafiz",
                "message" => "Halo dunia!",
                "time" => "1 menit lalu"
            ],
            [
                "author" => "Budi",
                "message" => "Laravel itu keren 😎",
                "time" => "5 menit lalu"
            ],
            [
                "author" => "Siti",
                "message" => "Belajar Laravel seru banget!",
                "time" => "10 menit lalu"
            ]
        ];

        return view('welcome', [
            'chirps' => $chirps
        ]);
    }

    public function home()
    {
        $chirps = [
            [
                "author" => "Andi",
                "message" => "Ini halaman home",
                "time" => "Baru saja"
            ]
        ];

        return view('home', [
            'chirps' => $chirps
        ]);
    }
}