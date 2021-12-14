@extends('layouts.app')

@section('content')
<div class="container">
    @if(session("info"))
        <div class='alert alert-success'>
            {{ session("info") }}
        </div>
    @endif
<div class="container">
    <h1>List Barang Masuk</h1>
    <hr>
    <div class="d-flex flex-row-reverse mb-2">
        <a href="{{ route("barangmasuk.create") }}" class="btn btn-success">Tambah</a>
    </div>
    <table class="table table-bordered bg-white">
        <thead>
            <th width="10%">No.</th>
            <th>Tanggal</th>
            <th>Nama Produk</th>
            <th>Qty</th>
            <th>Satuan</th>
            <th colspan=2 class="w-25">Action</th>
        </thead>
        <tbody>
            @foreach($barangmasuk as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->nama }}</td>
                <td><a href='{{ route('barangmasuk.edit',$item) }}' class="btn btn-warning">Rubah</a></td>
                <td>
                    <a href='' class="btn btn-danger"
                    onclick="event.preventDefault();
                    document.getElementById('form-hapus-{{$item->id}}').submit();">Hapus</a>
                    <form action="{{ route('barangmasuk.destroy',$item) }}"
                        id='form-hapus-{{$item->id}}'
                        method="post">
                        @csrf
                        @method("DELETE")
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection
