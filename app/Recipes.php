<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipes extends Model
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function ingredients()
    {
        return $this->belongsToMany(Ingredients::class);
    }
}
