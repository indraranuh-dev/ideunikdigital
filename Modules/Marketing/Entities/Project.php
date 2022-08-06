<?php

namespace Modules\Marketing\Entities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Marketing\Traits\Project\Filterable;
use Modules\Master\Entities\Category;

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

    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id', 'id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}