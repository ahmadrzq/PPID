<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StatusDokumen extends Model
{
    //
    protected $table = 'status_dokumen';

    public function dokumen(){
        return $this->hasMany(Dokumen::class);
    }
}
