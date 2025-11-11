@extends('layouts.dashboard')

@section('title', 'Daftar Kucing')

@section('content')
    <div class="text-center mb-5">
        <h1 class="cat-title">
            <span class="paw-icon">🐾</span>
            Daftar Kucing Peliharaan
            <span class="paw-icon">🐾</span>
        </h1>
        <p class="cat-subtitle">Klik nama kucing untuk melihat detailnya</p>
    </div>

    <div class="row justify-content-center">
        @foreach($kucings as $kucing)
        <div class="col-md-4 col-lg-3 mb-4">
            <div class="cat-card text-center">
                <h4 class="cat-name">{{ $kucing->nama_kucing }}</h4>
                <p class="cat-breed">{{ $kucing->ras }}</p>
                <a href="{{ route('kucings.show', $kucing->id) }}" class="btn btn-custom btn-sm mt-2">Lihat Detail</a>
            </div>
        </div>
        @endforeach
    </div>
@endsection
