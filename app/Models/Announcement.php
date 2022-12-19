<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Brackets\Translatable\Traits\HasTranslations;

class Announcement extends Model
{
use HasTranslations;
    protected $fillable = [
        'title',
        'description',
        'link',
        'published_at',
        'enabled',
    
    ];
    
    
    protected $dates = [
        'published_at',
        'created_at',
        'updated_at',
    
    ];
    // these attributes are translatable
    public $translatable = [
        'title',
        'description',
        'link',
    
    ];
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/announcements/'.$this->getKey());
    }
}
