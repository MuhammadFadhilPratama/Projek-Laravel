@extends('dashboard.layouts.main')
@section('container')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="card-body">
            <article>
                <h4 class="mb-3">{{ $berita->judul_berita }}</h4><hr style="background-color: white">
                <p>{!! $berita->isi_berita !!}</p>
                <a href="/dashboard/berita" class="btn btn-success">Kembali Ke Berita Utama</a>
                <a href="" class="btn brn-warning">Edit</a>
                <a href="" class="btn brn-danger">Hapus</a>
            </article>
        </div>
    </div>
@endsection