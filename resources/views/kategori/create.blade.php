@extends('layouts.app')

@section('content')
    <div class="page-inner mt--5">
        <div class="row">
        <div class="col-md-12">
        <div class="card full-height">
        <div class="card-header">
            <div class="card-head-row">
            <div class="card-title">Form Tambah Kategori</div>
            <a href="{{ route('kategori.index') }}" class="btn btn-warning btn-sm ml-auto">Kembali</a>
        </div>
    </div>

<div class="card-body">
    <form method="post" action="{{ route('kategori.store') }} ">
        @csrf
        <div class="form-group">
           <label for="kategori">Nama Kategori</label>
           <input type="text" name="nama_kategori" class="form-control" id="text" placeholder="Masukkan Nama Kategori">
     </div>

     <div class="form-group">
     <button class="btn btn-primary btn-sm" type="submit">Simpan</button>
     </div>
    </div>
</form>
</div>

  @endsection
