@extends('frontend.layout')

@section('content')

<h1 class="page-title">Menu Catering</h1>
<p class="page-desc">
    Pilihan menu terbaik dengan cita rasa berkualitas untuk setiap acara.
</p>

<div class="menu-grid">
    @foreach ($menus as $menu)
    <div class="menu-item">
        <div class="menu-body">
            <h3>{{ $menu->nama_menu }}</h3>
            <span class="menu-type">{{ $menu->jenis_menu }}</span>
            <div class="menu-price">
                Rp {{ number_format($menu->harga) }}
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection
