@extends('user.dashboard')

@section('title', 'My Payment')

@section('content')
<div class="container">
    <h2>My Payment</h2>
    <p>Ini adalah halaman daftar pembayaran.</p>

    <!-- Tabel daftar pembayaran -->
    <div class="table-responsive mt-4">
        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Invoice</th>
                    <th>Tanggal</th>
                    <th>Status</th>
                    <th>Total</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @for ($i = 0; $i < 5; $i++) <!-- Contoh 5 data pembayaran -->
                    @php
                        $invoice = "INV-2025" . str_pad($i + 1, 3, '0', STR_PAD_LEFT);
                        $tanggal = now()->subDays($i)->format('d M Y');
                        $status = $i % 2 == 0 ? 'Lunas' : 'Menunggu';
                        $statusBadge = $i % 2 == 0 ? 'success' : 'warning text-dark';
                        $total = number_format(50000 + ($i * 15000), 0, ',', '.');
                    @endphp
                    <tr>
                        <td>{{ $i + 1 }}</td>
                        <td>{{ $invoice }}</td>
                        <td>{{ $tanggal }}</td>
                        <td><span class="badge bg-{{ $statusBadge }}">{{ $status }}</span></td>
                        <td>Rp{{ $total }}</td>
                        <td>
                            <!-- Button untuk membuka modal -->
                            <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#paymentModal{{ $i }}">
                                <i class="fas fa-eye"></i> Detail
                            </button>
                        </td>
                    </tr>

                    <!-- Modal Detail Pembayaran -->
                    <div class="modal fade" id="paymentModal{{ $i }}" tabindex="-1" aria-labelledby="paymentModalLabel{{ $i }}" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="paymentModalLabel{{ $i }}">Detail Pembayaran</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p><strong>Invoice:</strong> {{ $invoice }}</p>
                                    <p><strong>Tanggal:</strong> {{ $tanggal }}</p>
                                    <p><strong>Status:</strong> <span class="badge bg-{{ $statusBadge }}">{{ $status }}</span></p>
                                    <p><strong>Total:</strong> Rp{{ $total }}</p>
                                    <p><strong>Metode Pembayaran:</strong> Transfer Bank</p>
                                    <p><strong>Keterangan:</strong> Pembayaran untuk paket premium.</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endfor
            </tbody>
        </table>
    </div>
</div>
@endsection
