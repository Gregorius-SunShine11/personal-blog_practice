@extends('master')

@section('judul_halaman', 'Hello!')

@section('konten')
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">

    <h3>Selamat datang di blog saya!</h3> 
    <br>
    <h3>Untuk mengetahui lebih dalam tentang saya, silahkan menuju halaman biodata atau events.</h3>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <footer class="row">
        @include('footer')
    </footer>

@endsection