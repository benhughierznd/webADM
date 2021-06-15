<!-- function untuk menghubungkan dengan view template "master" -->
@extends('master')

<!-- untuk isi judul halaman -->
<!-- menghubungkan dengan 'judul_halaman' yang ada pada "master.blade.php" -->
@section('judul_halaman', 'Halaman Home')
 
<!-- isi bagian konten -->
@section('konten')

    <p> Testing Home </p>
    <p> Welcome </p>

@endsection