<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipe extends Model
{
    //
    protected $table = 'tipe';

    public function dokumen(){
        return $this->hasMany(Dokumen::class);
    }
}
