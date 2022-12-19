<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Brackets\Translatable\Traits\HasTranslations;

class Calendar extends Model
{
use HasTranslations;
    protected $table = 'calendar';

    protected $fillable = [
        'title',
        'description',
        'event_time',
        'event_location',
        'link',
        'published_at',
        'enabled',
    
    ];
    
    
    protected $dates = [
        'event_time',
        'published_at',
        'created_at',
        'updated_at',
    
    ];
    // these attributes are translatable
    public $translatable = [
        'title',
        'description',
        'event_location',
        'link',
    
    ];
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/calendars/'.$this->getKey());
    }
}
