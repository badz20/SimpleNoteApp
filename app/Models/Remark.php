<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Remark extends Model
{
    //
    public function note()
{
    return $this->belongsTo(Note::class);
}

public function user()
{
    return $this->belongsTo(User::class);
}
}
