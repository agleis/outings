<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{

    /**
     * Returns the trips this thing is associated with.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function trips() {
      return $this->belongsToMany('App\Trip');
    }


}
