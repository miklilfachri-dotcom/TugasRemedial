<h1 class="page-title">Detail Pesanan</h1>

<div class="order-summary">
    <div class="summary-item">
        <span>Nama Pelanggan</span>
        <strong>{{ $pemesanan->pelanggan->nama }}</strong>
    </div>

    <div class="summary-item">
        <span>Tanggal Acara</span>
        <strong>{{ $pemesanan->tanggal_acara }}</strong>
    </div>
</div>

<div class="table-wrapper">
    <table class="order-table">
        <thead>
            <tr>
                <th>Menu</th>
                <th class="center">Jumlah</th>
                <th class="right">Harga</th>
                <th class="right">Subtotal</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($pemesanan->details as $detail)
            <tr>
                <td>{{ $detail->menu->nama_menu }}</td>
                <td class="center">{{ $detail->jumlah }}</td>
                <td class="right">Rp {{ number_format($detail->menu->harga) }}</td>
                <td class="right">Rp {{ number_format($detail->subtotal) }}</td>
            </tr>
            @endforeach
        </tbody>

        <tfoot>
            <tr>
                <td colspan="3" class="total-label">Total</td>
                <td class="total-value">
                    Rp {{ number_format($pemesanan->details->sum('subtotal')) }}
                </td>
            </tr>
        </tfoot>
    </table>
</div>
