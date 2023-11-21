<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $table = 'barang';

    protected $fillable = [
        'idBarang','idKategori', 'nama_barang','harga','stok','keterangan','gambar'
    ];

    protected $hidden = [];
    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'idKat');
    }
}
