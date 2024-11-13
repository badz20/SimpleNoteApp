<?php

namespace App\Models;
use App\Models\Remark;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    //
    protected $fillable = [
        'name',
        'description',
    ];

    public function remarks()
{
    return $this->hasMany(Remark::class);
}
}
