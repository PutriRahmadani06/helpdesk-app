@extends('layouts.metronic')

@section('title', 'Dashboard')

@section('content')
<div class="row g-5 g-xl-8">
    <div class="col-md-3">
        <div class="card">
            <div class="card-body text-center">
                <h1 class="text-primary fs-1 fw-bold">{{ $totalPengaduan ?? 0 }}</h1>
                <span class="text-gray-600">Total Pengaduan</span>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card">
            <div class="card-body text-center">
                <h1 class="text-warning fs-1 fw-bold">{{ $belumDiproses ?? 0 }}</h1>
                <span class="text-gray-600">Belum Diproses</span>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card">
            <div class="card-body text-center">
                <h1 class="text-info fs-1 fw-bold">{{ $sedangDiproses ?? 0 }}</h1>
                <span class="text-gray-600">Sedang Diproses</span>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card">
            <div class="card-body text-center">
                <h1 class="text-success fs-1 fw-bold">{{ $selesai ?? 0 }}</h1>
                <span class="text-gray-600">Selesai</span>
            </div>
        </div>
    </div>
</div>

<div class="card mt-5">
    <div class="card-header">
        <h3 class="card-title">Pengaduan Terbaru</h3>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Judul</th>
                        <th>Status</th>
                        <th>Tanggal</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($pengaduanTerbaru ?? [] as $item)
                    <tr>
                        <td>{{ $item->judul }}</td>
                        <td>{{ $item->status }}</td>
                        <td>{{ $item->created_at->format('d/m/Y') }}</td>
                        <td><a href="#" class="btn btn-sm btn-primary">Detail</a></td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4" class="text-center">Belum ada pengaduan</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection