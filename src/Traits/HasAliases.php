<?php

namespace Osoobe\RelatedContent\Traits;

use Osoobe\RelatedContent\Models\Alias;

trait HasAliases {

    public function aliases() {
        return $this->morphMany(Alias::class, 'aliasable');
    }

}

?>
