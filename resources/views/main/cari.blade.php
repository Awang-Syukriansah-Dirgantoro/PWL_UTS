@extends('main.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12margin-tb">
            <div class="pull-leftmt-2">
                <h2>RESTO KURANG JAGO</h2>
            </div>
            <div class="float-rightmy-2">
                <a class="btn btn-success" href="{{ route('menu.create') }}">Input Menu</a>
            </div>
        </div>
    </div>
    <form method="post" action="{{ url('cari') }}" id="myForm">
        @csrf
        <div class="form-group">
            <label for="kode_barang">Cari</label>
            <input type="text" name="cari" class="form-control" id="kode_barang" aria-describedby="kode_barang"
                placeholder="Cari Berdasarkan Kode Barang">
        </div>
        <button type="submit" class="btn btn-success mt-3">
            cari
        </button>
    </form>
    <br>
    @if (session('failed'))
        <div class="alert alert-success">
            <p>{{ session('failed') }}
            </p>
        </div>
    @endif
    <table class="table table-bordered">

        <tr>
            <th>ID</th>
            <th>Kode</th>
            <th>Nama</th>
            <th>Kategori</th>
            <th>Harga</th>
            <th>Quality</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($menu as $menus)
            <tr>
                <td>{{ $menus->id }}</td>
                <td>{{ $menus->kode_barang }}</td>
                <td>{{ $menus->nama_barang }}</td>
                <td>{{ $menus->kategori_barang }}</td>
                <td>{{ $menus->harga }}</td>
                <td>{{ $menus->qty }}</td>
                <td>
                    <form action="{{ route('menu.destroy', ['menu' => $menus->id]) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('menu.show', ['menu' => $menus->id]) }}">Show</a>
                        <a class="btn btn-primary" href="{{ route('menu.edit', ['menu' => $menus->id]) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach

    </table>
@endsection
