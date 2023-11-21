@extends('layouts.app')

@section('content')
    <div class="page-inner mt--5">
        <div class="row">
        <div class="col-md-12">
        <div class="card full-height">
        <div class="card-header">
            <div class="card-head-row">
            <div class="card-title">Data Barang
            <a href="{{ route('barang.create') }}" class="btn btn-success btn-sm">
                <i class="fa fa-plus"></i>Tambah
            </a>
        </div>
    </div>
    </div>

<div class="card-body">
    @if(Session::has('success'))
    <div class="alert alert-primary">
        {{ Session('success') }}
    </div>
    @endif
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kategori</th>
                    <th>Nama Barang</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Keterangan</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ( $barang as $row)
                <tr>
                    <td>{{ $row->idBarang }}</td>
                    <td>{{ $row->idKat }}</td>
                    <td>{{ $row->nama_barang }}</td>
                    <td>{{ $row->harga }}</td>
                    <td>{{ $row->stok}}</td>
                    <td>{{ $row->keterangan }}</td>
                    <td>{{ $row->gambar }}</td>
                    <td>

                    </td>
                </tr>
                @empty
                <tr>
                    <td>Data Masih Kosong</td>
                </tr>
                    
                @endforelse
               
            </tbody>
        </table>
                   </div>
             </div>
        </div>
    </div>
</div>

  @endsection
