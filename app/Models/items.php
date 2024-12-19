<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class items extends Model
{
    use HasFactory;
    /**
     * Get the Type_item that owns the items
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Typeitems(): BelongsTo
    {
        return $this->belongsTo(typesitems::class, 'type_item_id', 'id');
    }
    /**
     * Get the Quantite that owns the items
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Quantites(): BelongsTo
    {
        return $this->belongsTo(quantites::class, 'quantite_id', 'id');
    }
    /**
     * Get the user that owns the items
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Localisations(): BelongsTo
    {
        return $this->belongsTo(localisations::class, 'localisation_id', 'id');
    }
}
