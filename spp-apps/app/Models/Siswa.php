<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Siswa extends Model
{
    use SoftDeletes;

    protected $table = 'siswa';

    protected $fillable = [
        'kelas_id',
        'nama',
        'nisn',
        'nis',
        'jenis_kelamin',
        'alamat',
        'telp_wali'
    ];

    public function kelas(){
        return $this->hasOne('App\Models\Kelas','id','kelas_id');
    }

    public function transaksi(){
        return $this->hasMany('App\Models\Transaksi','siswa_id','id');
    }

    public function role(){
        return $this->hasMany('App\Models\Role','siswa_id','id');
    }

    public function tabungan(){
        return $this->hasMany('App\Models\Tabungan','siswa_id','id');
    }
}
