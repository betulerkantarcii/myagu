<?php

namespace App\Models;

use Brackets\Media\HasMedia\AutoProcessMediaTrait;
use Brackets\Media\HasMedia\HasMediaCollectionsTrait;
use Brackets\Media\HasMedia\HasMediaThumbsTrait;
use Brackets\Media\HasMedia\ProcessMediaTrait;
use Illuminate\Database\Eloquent\Model;
use Brackets\Translatable\Traits\HasTranslations;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class CafeteriaMenu extends Model implements HasMedia
{
    use ProcessMediaTrait;
    use AutoProcessMediaTrait;
    use HasMediaCollectionsTrait;
    use HasMediaThumbsTrait;
    use HasTranslations;

    protected $table = 'cafeteria_menu';

    protected $fillable = [
        'title',
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
    
    ];
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/cafeteria-menus/'.$this->getKey());
    }

    public function registerMediaCollections(): void
    {

        $this->addMediaCollection('file')
            ->acceptsMimeTypes([
                'application/pdf'
            ])
            ->maxFilesize(10*1024*1024)
            ->singleFile();

        

    }

    public function getFileAttribute()
    {
        return $this->getFirstMediaUrl('file', 'thumb_square') ?: false;
    }
    
    public function registerMediaConversions(Media $media = null): void
    {
        $this->autoRegisterThumb200();
    }

}
