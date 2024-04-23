<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Student extends Model
{
    use HasFactory , HasUuids;
    protected $fillable = [
        'name',
        'college_id',
        'phone',
        'level',
        'department',
        'competition_id'
    ];

    public function competition():BelongsTo
    {
      return  $this->belongsTo(Competition::class);
    }
}
