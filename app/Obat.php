<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    //
    protected $table = 'tbl_obat';

    protected $fillable = ['nama_obat','penyakit','harga'];
}
