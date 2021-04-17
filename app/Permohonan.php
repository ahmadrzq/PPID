<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permohonan extends Model
{
    //
    protected $table = 'permohonan';

    protected $guarded = ['id'];

    public function provinsi(){
        return $this->belongsTo(Provinsi::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
    
    public function dinas(){
        return $this->belongsTo(Dinas::class);
    }
}
