<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ruangan extends Model
{
    //
    protected $table = 'tbl_ruangan';

    protected $fillable = ['nama_ruangan','no_ruangan','kelas','biaya'];
}
