<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KontakPesan extends Model
{
    protected $fillable = ['nama_perusahaan', 'nama_depan', 'nama_belakang', 'jabatan', 'email', 'nomor_telepon', 'pesan'];

}
