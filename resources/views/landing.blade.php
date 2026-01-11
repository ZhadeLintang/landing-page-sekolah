@extends('layouts.app')

@section('title', 'SMK Prestasi Prima')

@section('content')

<section class="hero">
    <img src="{{ asset('logo-smk-prestasi-prima.png') }}" alt="SMK Prestasi Prima" class="hero-img">

    <h1>SMK Prestasi Prima</h1>
    <p>Sekolah Kejuruan Berbasis Teknologi</p>
</section>


<section id="profil" class="section">
    <h2>Profil Sekolah</h2>
    <p>
        SMK Prestasi Prima adalah sekolah kejuruan yang berfokus pada
        pengembangan kompetensi teknologi dan karakter siswa.
    </p>
</section>

<section id="visi" class="section light">
    <h2>Visi dan Misi</h2>

    <h3>Visi</h3>
    <p>Mewujudkan lulusan yang unggul dan profesional.</p>

    <h3>Misi</h3>
    <ul>
        <li>Menyediakan pendidikan berbasis teknologi</li>
        <li>Meningkatkan keterampilan dan karakter siswa</li>
        <li>Mempersiapkan lulusan siap kerja</li>
    </ul>
</section>

<section id="jurusan" class="section">
    <h2>Program Keahlian</h2>

    <div class="cards">
        <div class="card">
            <h4>Rekayasa Perangkat Lunak</h4>
            <p>Belajar pemrograman, web, dan aplikasi</p>
        </div>

        <div class="card">
            <h4>Teknik Komputer dan Jaringan</h4>
            <p>Belajar jaringan dan server</p>
        </div>

        <div class="card">
            <h4>Broadcasting dan Perfilman</h4>
            <p>Belajar desain grafis dan video editing</p>
        </div>
    </div>
</section>

<footer id="kontak" class="footer">
    <h3>Kontak Sekolah</h3>
    <p>Jl. Hankam Raya No.89, RT.7/RW.4, Cilangkap, Kec. Cipayung, Kota Jakarta Timur </p>
    <p>Email: ekolah@smkprestasiprima.sch.id. | Telp: 021-84306823</p>
    <small>&copy; 2026 SMK Prestasi Prima</small>
</footer>

@endsection
