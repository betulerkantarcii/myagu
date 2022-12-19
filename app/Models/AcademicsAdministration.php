<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Brackets\Translatable\Traits\HasTranslations;

class AcademicsAdministration extends Model
{
use HasTranslations;
    protected $table = 'academics_administration';

    protected $fillable = [
        'title',
        'link',
        'enabled',
    
    ];
    
    
    protected $dates = [
    
    ];
    // these attributes are translatable
    public $translatable = [
        'title',
        'link',
    
    ];
    public $timestamps = false;
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/academics-administrations/'.$this->getKey());
    }
}
