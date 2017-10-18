<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Scrapper extends Model {

    public function scrap() {
        return $this->belongsTo(Scrapper::class);
    }

    public function json() {

    }
}