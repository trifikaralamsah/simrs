<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    //
    protected $table = 'tbl_dokter';

    protected $fillable = ['nama','poli','hari_praktek','jam_praktek'];
}
