@extends('layouts.app')

@section('content')
    <div class="page-inner mt--5">
        <div class="row">
        <div class="col-md-12">
        <div class="card full-height">
        <div class="card-header">
            <div class="card-head-row">
            <div class="card-title">Data Kategori
                <a href="{{ route('kategori.create') }}" class="btn btn-success btn-sm">
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
                    <th>Nama Kategori</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($kategori as $item)
                <tr>
                    <td>{{ $item->idKat }}</td>
                    <td>{{ $item->nama_kategori }}</td>
                    <td>
                        <a href="{{ route('kategori.edit', $item->idKat) }}" class="btn btn-warning btn-sm">Edit</a>

                        <form action="{{ route('kategori.destroy', $item->idKat) }}" method="post" class="d-inline" onsubmit="return confirm('Yakin Hapus Data?')">
                            @method('delete')
                            @csrf
                            <button class="btn btn-danger btn-sm">
                                <i class="fa fa-trash"></i>
                            </button>
                         
                        </form>
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
