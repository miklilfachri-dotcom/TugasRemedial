@extends('frontend.layout')

@section('content')

<section class="hero">
    <h1>Welcome to <span>Catering</span></h1>
    <p>
        Menyediakan apapun yang kamu mau untuk acara spesialmu dengan cita rasa terbaik dan layanan profesional.
    </p>
</section>

@foreach ($menus as $jenis => $items)
<section class="menu-section">
    <div class="section-header">
        <h2>{{ $jenis }}</h2>
        <div class="line"></div>
    </div>

    <div class="menu-grid">
        @foreach ($items as $menu)
        <div class="menu-card">
            <div class="menu-info">
                <h3>{{ $menu->nama_menu }}</h3>
                <p class="price">Rp {{ number_format($menu->harga) }}</p>
            </div>
        </div>
        @endforeach
    </div>

    <a href="{{ route('pemesanan.detail', 1) }}" class="detail-btn">
        Lihat Detail Pesanan →
    </a>
</section>
@endforeach

@endsection
