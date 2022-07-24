<?php

namespace Modules\Marketing\Entities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectsImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'media_path',
        'caption',
        'description',
        'alt',
        'created_at',
        'updated_at',
    ];

    protected static function newFactory()
    {
        return \Modules\Marketing\Database\factories\ProjectsImageFactory::new ();
    }
}