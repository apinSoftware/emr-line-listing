<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PreviousUploads extends Model
{
    use SoftDeletes;

    public $table = 'previous_uploads';

    protected $fillable = [
        'state_id',
        'file_name',
        'date_uploaded',
        'date_processed',
        'status'
    ];

    public function status()
    {
        return $this->belongsTo(Status::class, 'status_id');
    }
}
