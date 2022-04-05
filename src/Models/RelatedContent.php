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
        'target_id',
        'target_type',
    ];


}
