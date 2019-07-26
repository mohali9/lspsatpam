<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beranda extends Model
{
    protected $table = 'beranda';
    protected $fillable = ['judul','deskripsi','gambar'];
}
