<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    //
    protected $table = 'pembayaran';
    protected $guarded=[];
    // protected $fillable = ['nama_penyetor','bank','jumlah','bukti'];

    // Eloquent pembayaran ke sertifikasi {1 ke banyak}
    public function sertifikasi()
    {
    	return $this->hasMany(Sertifikasi::class, 'pembayaran_id');
    }
}
