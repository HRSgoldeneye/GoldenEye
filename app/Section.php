<?php

namespace App;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use Searchable;
    protected $guarded = [];

    public function statute() {
        return $this->belongsTo(Statute::class);
    }
}
