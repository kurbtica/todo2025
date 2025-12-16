<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\{Model, SoftDeletes};
use Illuminate\Database\Eloquent\Relations\{BelongsTo, BelongsToMany};

class Todos extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['texte', 'termine', 'important'];

    // Optionnel mais recommandé si tu veux accéder à deleted_at comme un objet Carbon
    // protected $dates = ['deleted_at'];

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Categories::class);
    }

    public function listes(): BelongsTo
    {
        return $this->belongsTo(Listes::class)->withDefault();
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class)->withDefault();
    }
}
