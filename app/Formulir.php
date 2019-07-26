<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formulir extends Model
{
    protected $table = 'formulir';
    public $timestamps = true;
    protected $guarded=[];
    // protected $fillable = ['nik','nama_depan','nama_belakang','gender','alamat','tempat_lahir','tgl_lahir','tinggi','berat','pendidikan_terakhir','no_hp','email','password','user_id','flag'];
}
