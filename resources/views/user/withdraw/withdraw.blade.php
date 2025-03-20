@extends('user.dashboard')

@section('title', 'Withdrawals')

@section('content')
<div class="container">
    <h2>Withdrawals</h2>
    <p>Ini adalah halaman penarikan saldo.</p>

    <!-- Tombol untuk mengajukan penarikan -->
    <button class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#withdrawModal">
        <i class="fas fa-money-bill-wave"></i> Ajukan Withdraw
    </button>

    <!-- Tabel daftar penarikan -->
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Invoice</th>
                    <th>Tanggal</th>
                    <th>Status</th>
                    <th>Jumlah</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @for ($i = 0; $i < 5; $i++) <!-- Contoh 5 data withdraw -->
                    @php
                        $invoice = "WD-2025" . str_pad($i + 1, 3, '0', STR_PAD_LEFT);
                        $tanggal = now()->subDays($i)->format('d M Y');
                        $status = $i % 2 == 0 ? 'Sukses' : 'Pending';
                        $statusBadge = $i % 2 == 0 ? 'success' : 'warning text-dark';
                        $jumlah = number_format(100000 + ($i * 50000), 0, ',', '.');
                    @endphp
                    <tr>
                        <td>{{ $i + 1 }}</td>
                        <td>{{ $invoice }}</td>
                        <td>{{ $tanggal }}</td>
                        <td><span class="badge bg-{{ $statusBadge }}">{{ $status }}</span></td>
                        <td>Rp{{ $jumlah }}</td>
                        <td>
                            <!-- Button untuk membuka modal -->
                            <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#withdrawDetailModal{{ $i }}">
                                <i class="fas fa-eye"></i> Detail
                            </button>
                        </td>
                    </tr>

                    <!-- Modal Detail Withdraw -->
                    <div class="modal fade" id="withdrawDetailModal{{ $i }}" tabindex="-1" aria-labelledby="withdrawDetailModalLabel{{ $i }}" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="withdrawDetailModalLabel{{ $i }}">Detail Withdraw</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p><strong>Invoice:</strong> {{ $invoice }}</p>
                                    <p><strong>Tanggal:</strong> {{ $tanggal }}</p>
                                    <p><strong>Status:</strong> <span class="badge bg-{{ $statusBadge }}">{{ $status }}</span></p>
                                    <p><strong>Jumlah:</strong> Rp{{ $jumlah }}</p>
                                    <p><strong>Metode Transfer:</strong> Bank BCA</p>
                                    <p><strong>No. Rekening:</strong> 1234567890</p>
                                    <p><strong>Keterangan:</strong> Penarikan saldo dari platform.</p>
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

<!-- Modal Pengajuan Withdraw -->
<div class="modal fade" id="withdrawModal" tabindex="-1" aria-labelledby="withdrawModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="withdrawModalLabel">Ajukan Penarikan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="amount" class="form-label">Jumlah Penarikan</label>
                        <input type="number" class="form-control" id="amount" placeholder="Masukkan jumlah">
                    </div>
                    <div class="mb-3">
                        <label for="bank" class="form-label">Bank Tujuan</label>
                        <select class="form-select" id="bank">
                            <option>BCA</option>
                            <option>Mandiri</option>
                            <option>BNI</option>
                            <option>BRI</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="account" class="form-label">Nomor Rekening</label>
                        <input type="text" class="form-control" id="account" placeholder="Masukkan nomor rekening">
                    </div>
                    <button type="submit" class="btn btn-primary">Ajukan</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
