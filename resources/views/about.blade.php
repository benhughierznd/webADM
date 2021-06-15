<!-- VIEW INI UNTUK HALAMAN ABOUT PADA /JOB/ABOUT -->

<!-- Menghubungkan dengan view template 'Master' -->
@extends('master')

<!-- untuk isi judul halaman -->
<!-- menghubungkan dengan 'judul_halaman' yang ada pada "master.blade.php" -->
@section('judul_halaman', 'About us')

<!-- isi bagian konten -->
<!-- menghubungkan dengan 'konten' pada "master.blade.php" -->
@section('konten')
    
    <p> About us </p>
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil sed maiores impedit ea praesentium possimus natus, odit, amet illum itaque maxime deleniti aut dolores. Dolores deleniti fugit voluptate ducimus dolorem!
    </p>

@endsection