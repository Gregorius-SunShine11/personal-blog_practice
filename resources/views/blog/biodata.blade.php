@extends('master')

@section('judul_halaman', 'Salam Kenal')

@section('konten')

    <link href="{{ asset('css/biodata.css') }}" rel="stylesheet">

    <p> 
        Berikut dibawah ini merupakan data diri saya :
    </p>

    <br>

    <table class="table table-sm" border="1">
        <tr>
            <td>{{ "Nama : " }}</td>
            <td>{{ "  Gregorius  " }}</td>
        </tr>
        <tr>
            <td>{{ "Usia : " }}</td>
            <td>{{ "  20 tahun  " }}</td>
        </tr>
        <tr>
            <td>{{ "Jenis Kelamin : " }}</td>
            <td>{{ "  Laki-laki  " }}</td>
        </tr>
        <tr>
            <td>{{ "Status/Pekerjaan : " }}</td>
            <td>{{ "  Mahasiswa  " }}</td>
        </tr>
        <tr>
            <td>{{ "Jurusan : " }}</td>
            <td>{{ "  Computer Science " }}</td>
        </tr>
        <tr>
            <td>{{ "Sekolah/Kampus : " }}</td>
            <td>{{ "  Binus University  " }}</td>
        </tr>
    </table>

    <br>

    <p>
        Sebagai mahasiswa Computer Science, saya tertarik dengan bidang Intelligent Systems, dan ingin menjadi seorang Machine Learning
        Engineer setelah lulus kuliah. Selain itu, saya juga memiliki hobi di Competitive Programming, dimana saya dapat mengasah kemampuan algoritma dan matematika
        saya sekaligus berkompetisi secara sehat bersama dengan orang-orang yang memiliki hobi yang sama dengan saya.
    </p>

    <br>

    <h3> Untuk mengetahui lebih lanjut mengenai pengalaman berkompetisi saya, silahkan menuju ke halaman events. </h3>
@endsection
    