<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Schedule extends Model
{
    public function section(): BelongsTo{
        return $this->belongsTo(Section::class);
    }
}
