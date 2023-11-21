@extends('layouts.app')

@section('content')
    <div class="page-inner mt--5">
        <div class="row">
        <div class="col-md-12">
        <div class="card full-height">
        <div class="card-header">
            <div class="card-head-row">
            <div class="card-title">Form Tambah Barang</div>
            <a href="{{ route('barang.index') }}" class="btn btn-warning btn-sm ml-auto">Kembali</a>
        </div>
    </div>

<div class="card-body">
    <form method="post" action="{{ route('barang.store') }} ">
        @csrf
        <div class="form-group">
            <label>Kategori</label>
            <select name="idKat" class="form-control">
                <option value="">- Pilih - </option>
                @foreach ($kategori as $item)
                <option value="{{ $item->idKat }}">{{ $item->nama_kategori }} </option>
                @endforeach
            </select>
        </div>

     <div class="control-group">
        <label for="nama_barang">Nama Barang</label>
        <input type="text" name="nama_barang" class="form-control" id="text" placeholder="Masukkan Nama Barang">
  </div>
        <div class="control-group">
        <label for="harga">Harga</label>
        <input type="number" name="harga" class="form-control" id="text" placeholder="Masukkan Harga">
  </div>
      <div class="control-group">
     <label for="stok">Stok</label>
     <input type="number" name="stok" class="form-control" id="text" placeholder="Masukkan Stok">
</div>
     <div class="control-group">
        <label for="keterangan">Keterangan</label>
        <input type="text" name="keterangan" class="form-control" id="text" placeholder="Keterangan">

    </div>
        <div class="control-group">
            <label for="gambar">Gambar</label>
            <input type="file" name="gambar" class="form-control" id="gambar" placeholder="Masukkan Gambar">
      </div>
  </div>
     <div class="form-group">
     <button class="btn btn-primary btn-sm" type="submit">Simpan</button>
     </div>
    </div>
        </div>
</form>
</div>

  @endsection
