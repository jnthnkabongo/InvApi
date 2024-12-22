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
    /**
     * Get the Status that owns the items
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Status(): BelongsTo
    {
        return $this->belongsTo(statusitems::class, 'status_item_id', 'id');
    }
    /**
     * Get the Etatitems that owns the items
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Etatitems(): BelongsTo
    {
        return $this->belongsTo(etatitems::class, 'etat_item_id', 'id');
    }

    /**
     * Get the Communes that owns the items
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Communes(): BelongsTo
    {
        return $this->belongsTo(communes::class, 'commune_id', 'id');
    }
}
