<?php

namespace Modules\Marketing\Entities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Marketing\Traits\Project\Filterable;

class Project extends Model
{
    use HasFactory, Filterable;

    protected $fillable = [
        'name',
        'slug_name',
        'service_id',
        'category_id',
        'thumbnail',
        'client_name',
        'client_logo',
        'description',
        'study_case',
        'is_active',
        'created_at',
        'updated_at',
    ];

    protected static function newFactory()
    {
        return \Modules\Marketing\Database\factories\ProjectFactory::new ();
    }
}