@extends('frontend.layout')

@section('content')

<h1 class="page-title">Kontak Kami</h1>

<p class="page-desc">
    Hubungi kami untuk pemesanan, pertanyaan menu, atau kerja sama.
</p>

<div class="contact-card">
    <div class="contact-item">
        <div class="icon">📍</div>
        <div class="info">
            <span>Alamat</span>
            <strong>Sungai Penuh</strong>
        </div>
    </div>

    <div class="contact-item">
        <div class="icon">📱</div>
        <div class="info">
            <span>WhatsApp</span>
            <strong class="highlight">0883724430</strong>
        </div>
    </div>

    <div class="contact-item">
        <div class="icon">ℹ️</div>
        <div class="info">
            <span>Keterangan</span>
            <strong>Menyediakan Nasi Padang</strong>
        </div>
    </div>
</div>

@endsection
