<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    public function titles() {
        return $this->hasMany(Title::class);
    }
    //
}
