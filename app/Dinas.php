<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dinas extends Model
{
    //
    protected $table = 'dinas';
    protected $fillable = ['nama'];

    public function diskusi(){
        return $this->hasMany(Dokumen::class);
    }
}
