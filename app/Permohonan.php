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
}
