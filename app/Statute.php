<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Statute extends Model
{
    public function sections() {
        return $this->hasMany(Section::class);
    }

    public function title() {
        return $this->belongTo(Title::class);
    }
    //
}
