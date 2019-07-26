<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sertifikasi extends Model
{
    //
    protected $table = 'sertifikasis';
    protected $guarded = [];

// Eloquent User ke sertifikasi {1 ke banyak}
    public function user()
    {
    	return $this->belongsTo(User::class, 'user_id')->withDefault();
    }

// Ambil Eloquent JadwalTuk ke sertifikasi
    public function jadwal_tuk()
    {
    	return $this->belongsTo(JadwalTuk::class, 'jadwal_tuks_id')->withDefault();
    }
}
