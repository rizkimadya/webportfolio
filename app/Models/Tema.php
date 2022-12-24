<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tema extends Model
{
    protected $table = 'temas';
    protected $fillable = [
        'id_tema',
        'nama',
        'agama',
        'kewarganegaraan',
        'pekerjaan',
        'tanggal_lahir',
        'tempat_lahir',
        'alamat',
        'foto',

        // sosmed
        'no_wa',
        'nama_ig',
        'email',

        //data hobi
        
        
        // data keahlian
        'keahlian1',
        'persentase1',
        'keahlian2',
        'persentase2',
        'keahlian3',
        'persentase3',
        'keahlian4',
        'persentase4',
        'keahlian5',
        'persentase5',

        // pendidikan formal
        'sd',
        'tahun_sd',
        'smp',
        'tahun_smp',
        'sma',
        'tahun_sma',
        'kuliah',
        'tahun_kuliah',

        // organisasi
        'organisasi1',
        'jabatan1',
        'tahun_menjabat1',
        'organisasi2',
        'jabatan2',
        'tahun_menjabat2',
        'organisasi3',
        'jabatan3',
        'tahun_menjabat3',

        // moto
        'moto'
        
    ];

    protected $with = 'user';
    
    public function user(){
        return $this->belongsTo(User::class);
    }
}
