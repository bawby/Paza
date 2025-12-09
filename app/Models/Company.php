<?php

namespace App\Models;

use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Company extends Model implements HasMedia
{
    use HasFactory;

    use InteractsWithMedia;

    protected $fillable = [
        'name',
        'slug',
        'kra_pin',
        //'logo',
        'email',
        'phone',
        'website',
        'postal_address',
        'postal_code',
        'county',
        'town',
        'address',
        'street',
        //'description',
    ];

    //protected $table = 'companies';

    public function registerMediaCollections(): void
    {
        $this
            ->addMediaCollection('logo')
            ->singleFile()
            ->useDisk('public');
    }
    public function registerMediaConversions(Media $media = null): void
    {
        // Create a small thumbnail conversion
        $this->addMediaConversion('thumb')
            ->width(200)
            ->height(200)
            ->sharpen(10)
            ->performOnCollections('logo');

        // Medium conversion for larger displays
        $this->addMediaConversion('medium')
            ->width(600)
            ->height(600)
            ->performOnCollections('logo');
    }

    /**
     * Accessor that returns the best available logo URL (thumb preferred).
     */
    public function getLogoUrlAttribute(): ?string
    {
        return $this->getFirstMediaUrl('logo', 'thumb') ?: $this->getFirstMediaUrl('logo') ?: null;
    }
}
