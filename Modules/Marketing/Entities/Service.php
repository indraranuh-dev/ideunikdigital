<?php

namespace Modules\Marketing\Entities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Marketing\Traits\Service\Filterable;

class Service extends Model
{
    use HasFactory, Filterable;

    protected $fillable = [
        'name',
        'slug_name',
        'logo',
        'header_image',
        'short_description',
        'description',
        'position',
        'is_active',
        'email',
        'whatsapp',
        'whatsapp_text',
        'address',
        'embed_maps',
        'cta_heading',
        'cta_sub_heading',
        'cta_button_text',
        'created_at',
        'updated_at',
    ];

    protected static function newFactory()
    {
        return \Modules\Marketing\Database\factories\ServiceFactory::new ();
    }
}