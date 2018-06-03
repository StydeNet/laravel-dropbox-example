<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $guarded = [];

    public function getSizeInKbAttribute()
    {
        return number_format($this->size / 1024, 1);
    }
}
