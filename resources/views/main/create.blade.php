@extends('main.layout')
@section('content')
    <div class="containermt-5">
        <div class="row justify-content-center align-items-center">
            <div class="card" style="width:24rem;">
                <div class="card-header">Tambah Menu</div>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong>Thereweresomeproblemswithyourinput.<br>
                            <br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="post" action="{{ route('menu.store') }}" id="myForm">
                        @csrf
                        <div class="form-group">
                            <label for="id">Id</label>
                            <input type="text" name="id" class="form-control" id="id" aria-describedby="id">
                        </div>
                        <div class="form-group">
                            <label for="kode_barang">Kode</label>
                            <input type="kode_barang" name="kode_barang" class="form-control" id="kode_barang" aria-describedby="kode_barang">
                        </div>
                        <div class="form-group">
                            <label for="nama_barang">Nama</label>
                            <input type="nama_barang" name="nama_barang" class="form-control" id="nama_barang" aria-describedby="nama_barang">
                        </div>
                        <div class="form-group">
                            <label for="kategori_barang">Kategori</label>
                            <input type="kategori_barang" name="kategori_barang" class="form-control" id="kategori_barang" aria-describedby="kategori_barang">
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <input type="harga" name="harga" class="form-control" id="harga" aria-describedby="harga">
                        </div>
                        <div class="form-group">
                            <label for="qty">Quality</label>
                            <input type="qty" name="qty" class="form-control" id="qty" aria-describedby="qty">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
