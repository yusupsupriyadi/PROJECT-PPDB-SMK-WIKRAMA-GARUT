<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    protected $table = 'pendaftaran';
    protected $fillable = ['nama_lengkap', 'nama_panggilan', 'jk', 'agama', 'tempat_lahir','tanggal_lahir','cita_cita','hobby','anak_ke','jumlah_saudara','berat_badan','tinggi_badan','golongan_darah','foto'];
    public function getFoto()
    {
        if (!$this->foto) {
            return asset('images/default.png');
        }

        return asset('images/' . $this->foto);
    }
}
