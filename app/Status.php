<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    public function articles()
    {
        return $this->hasMany(PreviousUploads::class);
    }
}
