<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Title extends Model
{
    public function statutes() {
        return $this->hasMany(Statute::class);
    }

    public function division() {
        return $this->belongTo(Division::class);
    }
    //
}
