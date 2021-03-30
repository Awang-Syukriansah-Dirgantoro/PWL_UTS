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
    <br>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}
            </p>
        </div>
    @endif
    <form method="post" action="{{ url('cari') }}" id="myForm">
        @csrf
        <div class="form-group">
            <label for="id">Cari</label>
            <input type="text" name="id" class="form-control" id="id" aria-describedby="id"
                placeholder="Cari bedasarkan id">
        </div>
        <button type="submit" class="btn btn-success mt-3">
            cari
        </button>
    </form>
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
        @foreach ($list as $menu)
            <tr>
                <td>{{ $menu->id }}</td>
                <td>{{ $menu->kode_barang }}</td>
                <td>{{ $menu->nama_barang }}</td>
                <td>{{ $menu->kategori_barang }}</td>
                <td>{{ $menu->harga }}</td>
                <td>{{ $menu->qty }}</td>
                <td>
                    <form action="{{ route('menu.destroy', ['menu' => $menu->id]) }}" method="POST">
                        <a class="btn btn-info"
                            href="{{ route('menu.show', ['menu' => $menu->id]) }}">Show</a>
                        <a class="btn btn-primary"
                            href="{{ route('menu.edit', ['menu' => $menu->id]) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach

    </table>
    {{ $list->links() }}
@endsection
