<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mockery\Matcher\Subset;

class SchoolYear extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }
}
