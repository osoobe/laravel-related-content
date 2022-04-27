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
        'aliasable_id',
        'aliasable_type',
        'alias'
    ];


    public function aliasable() {
        return $this->morphTo();
    }

}
