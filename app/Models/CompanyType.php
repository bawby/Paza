<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CompanyType extends Model
{
    protected $fillable = [
        'name',
        'slug',
    ];

    /** @return BelongsTo<Advert, $this> */
    public function companies(): BelongsTo
    {
        return $this->belongsTo(Company::class, 'companytype_company', 'companytype_id', 'company_id');
    }
}
