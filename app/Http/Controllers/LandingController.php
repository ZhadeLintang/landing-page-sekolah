<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $jurusan = [
            [
                'nama' => 'Rekayasa Perangkat Lunak',
                'deskripsi' => 'Belajar pemrograman, web, dan aplikasi'
            ],
            [
                'nama' => 'Teknik Komputer dan Jaringan',
                'deskripsi' => 'Belajar jaringan, server, dan hardware'
            ],
            [
                'nama' => 'Multimedia',
                'deskripsi' => 'Belajar desain grafis dan video editing'
            ],
        ];

        return view('landing', compact('jurusan'));
    }
}
