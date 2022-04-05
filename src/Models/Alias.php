<?php

namespace Osoobe\RelatedContent\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Osoobe\LaravelTraits\Support\TimeDiff;

class Alias extends Model
{
    use HasFactory;
    use TimeDiff;

    protected $fillable = [
        'relatable_id',
        'relatable_type',
        'alias'
    ];

}
