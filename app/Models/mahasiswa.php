<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    use HasFactory;
    protected$table = 'mahasiswas';
    protected $fillable = ['nama','nim','prodi','jenis_kel','jenis_bea','status_bea','ipk','gaji','alamat','wa','email'];

    // protected $guarded = ['id'];
}
