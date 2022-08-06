<?php

namespace Modules\Marketing\Entities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Marketing\Traits\Team\Filterable;

class Team extends Model
{
    use HasFactory, Filterable;

    protected $fillable = [
        'name',
        'job_title',
        'media_path',
        'position',
        'is_active',
        'created_at',
        'updated_at',
    ];
}