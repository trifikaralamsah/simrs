<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    //
    protected $table = 'tbl_pasien';

    protected $fillable = ['no_ktp','nama','jenis_kelamin','ttl', 'usia', 'alamat'];
}
