<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory , HasUuids;
   protected $fillable = [
       'name',
       'instructor',
       'link',
       'description'
   ];
    public function scopeFilter($query , array $filters ) // course->filter
    {
        if ($filters['search'] ?? false) {
        $query->where('name', 'like', '%' . request('search') . '%')
            ->orWhere('instructor' , 'like' , '%' .request('search') . '%')
            ->orWhere('description' , 'like' , '%' .request('search') . '%');
    }
    }
}
