<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dokumen extends Model
{
    //
    protected $table = 'dokumen';

    protected $guarded = ['id'];

    public function getFiles(){
        return asset('file/dokumen/'.$this->file);
    }

    public function dinas(){
        return $this->belongsTo(Dinas::class);
    }

    public function jenis(){
        return $this->belongsTo(Jenis::class);
    }

    public function kategori(){
        return $this->belongsTo(Kategori::class);
    }

    public function status_dokumen(){
        return $this->belongsTo(StatusDokumen::class);
    }

    public function tipe(){
        return $this->belongsTo(Tipe::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
