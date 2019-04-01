<?php

namespace App\Data\Models;

use Illuminate\Database\Eloquent\Model;

class AttachedFile extends Model
{

    protected $fillable = [
        'file_id',
        'file_type',
    ];

    public function file()
    {
        return $this->morphTo();
    }
}
