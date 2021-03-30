@extends('main.layout')
@section('content')
    <div class="containermt-5">
        <div class="row justify-content-center align-items-center">
            <div class="card" style="width:24rem;">
                <div class="card-header">Hasil Cari Menu</div>
                <div class="card-body">
                    <ul class="list-grouplist-group-flush">
                        <li class="list-group-item">
                            <b>Id:</b>{{ $menu->id }}
                        </li>
                        <li class="list-group-item">
                            <b>Kode:</b>{{ $menu->kode_barang }}
                        </li>
                        <li class="list-group-item">
                            <b>Nama:</b>{{ $menu->nama_barang }}
                        </li>
                        <li class="list-group-item">
                            <b>Kategori:</b>{{ $menu->kategori_barang }}
                        </li>
                        <li class="list-group-item">
                            <b>Harga:</b>{{ $menu->harga}}
                        </li>
                        <li class="list-group-item">
                            <b>Quality:</b>{{ $menu->qty }}
                        </li>
                    </ul>
                </div>
                <a class="btn btn-success mt-3" href="{{ route('menu.index') }}">
                    Kembali
                </a>
            </div>
        </div>
    </div>
@endsection
