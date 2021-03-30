<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jenis extends Model
{
    //
    protected $table = 'jenis';

    public function dokumen(){
        return $this->hasMany(Dokumen::class);
    }
}
