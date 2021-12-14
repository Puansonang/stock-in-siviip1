@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Form Barang Masuk</h1>
    <hr>
    <form action="{{ isset($barangmasuk)
        ?route("barangmasuk.update",$barangmasuk)
        :route("barangmasuk.store") }}" method="post">
         @csrf
         @isset($barangmasuk)
             @method("PUT")
         @endisset
        <div class="mb-3">
            <label for="tanggal" class="form-label">Tanggal</label>
            <input type="date" class="form-control" name="tanggal">
        </div>
        <div class="mb-3">
            <label for="produk_id" class="form-label">Produk</label>
            <select name="produk_id" id="kelompok_id" class="form-control">
                <option value="">Pilih</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="qty" class="form-label">Qty</label>
            <input type="number" class="form-control" name="qty">
        </div>
        <div class="mb-3">
            <input type="submit" value="Simpan" class="btn btn-success">
        </div>
    </form>
</div>
@endsection
