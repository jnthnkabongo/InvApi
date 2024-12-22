<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Shops extends Model
{
    use HasFactory;
    /**
     * Get the Regions that owns the Shops
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Regions(): BelongsTo
    {
        return $this->belongsTo(regions::class, 'region_id', 'id');
    }
    /**
     * Get the Localisation_id that owns the Shops
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Localisation(): BelongsTo
    {
        return $this->belongsTo(localisations::class, 'localisation_id', 'id');
    }
}
