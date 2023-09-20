<?php

namespace Osoobe\RelatedContent\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RelatedContent extends Model
{
    use HasFactory;

    protected $fillable = [
        'relatable_id',
        'relatable_type',
        'targetable_id',
        'targetable_type',
    ];

    /**
     * Relatable content
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphTo
     */
    public function relatable() {
        return $this->morphTo();
    }


    /**
     * Target content
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphTo
     */
    public function targetable() {
        return $this->morphTo();
    }


}
