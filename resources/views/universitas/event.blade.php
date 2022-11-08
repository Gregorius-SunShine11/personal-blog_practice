@extends('master')

@section('judul_halaman', 'My Competitive Programming Events')

@section('konten')

    @php
    $events = [
    ["INC 2021", 
    "INC (Indonesia National Contest) adalah lomba Competitive Programming terbesar di Indonesia untuk tingkat mahasiswa,
    sekaligus merupakan babak penyisihan untuk ICPC Regional Asia Jakarta, dimana ICPC (International Collegiate Programming Contest) 
    sendiri merupakan lomba Competitive Programming paling bergengsi di seluruh dunia. Pada INC ini, tim saya mendapat peringkat
    163 dari 600+ tim.", "Participant", 163], 
    ["Compfest XIV", 
    "Compfest adalah event IT terbesar yang diselenggarakan oleh Universitas Indonesia setiap tahun.
    Salah satu acara yang terdapat dalam Compfest adalah Competitive Programming Contest. Pada Compfest ke-14 ini,
    tim saya yaitu Proof by red is sus yang beranggotakan Bryan Vincencius, Eldwin Felice, dan saya sendiri berhasil
    meraih peringkat ke-10 dari 23 finalis yang berasal dari berbagai universitas di seluruh Indonesia.", "Finalist", 10]]
    @endphp

    @foreach($events as $e)
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h3 class="card-title">{{ $e[0] }}</h3>
            <h4 class="card-text">{{ $e[1] }}</h4>
        </div>
    </div>
    @endforeach

    <table class="table table-sm">
        <thead>
            <tr>
                <th>Lomba</th>
                <th>Hasil</th>
            </tr>
        </thead>
        @foreach($events as $e)
        <tbody>
            <tr>
                <td>{{ $e[0] }}</td>
                @if ($e[2] == "Winner") 
                    <td>Juara {{ $e[3] }}</td>
                @elseif ($e[2] == "Finalist")
                    <td>Finalis</td>
                @else 
                    <td>Peserta</td>
                @endif
            </tr>
        </tbody>
        @endforeach
    </table>

@endsection