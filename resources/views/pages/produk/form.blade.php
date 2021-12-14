@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Form Produk</h1>
    <hr>
    <form action="{{ isset($produk)
        ?route("produk.update",$produk)
        :route("produk.store") }}" method="post">
        @csrf
        @isset($produk)
            @method("PUT")
        @endisset
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" name="nama">
        </div>
        <div class="mb-3">
            <label for="kelompok_id" class="form-label">Kelompok</label>
            <select name="kelompok_id" id="kelompok_id" class="form-control">
                <option value="">Pilih</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="satuan" class="form-label">Satuan</label>
            <input type="text" class="form-control" name="satuan">
        </div>
        <div class="mb-3">
            <label for="harga" class="form-label">Harga</label>
            <input type="number" class="form-control" name="harga">
        </div>
        <div class="mb-3">
            <input type="submit" value="Simpan" class="btn btn-success">
        </div>
    </form>
</div>
@endsection
