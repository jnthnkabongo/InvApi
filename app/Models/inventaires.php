<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class inventaires extends Model
{
    use HasFactory;

    /**
     * Get the user that owns the inventaires
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function User(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    /**
     * Get the Item that owns the inventaires
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Item(): BelongsTo
    {
        return $this->belongsTo(items::class, 'item_id', 'numero_unique');
    }
}

