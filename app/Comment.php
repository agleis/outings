<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

    /**
     * Shows the user this thing belongs to.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user() {
      return $this->belongsTo('App\User');
    }

    /**
     * Shows the trip this thing belongs to.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function trip() {
      return $this->belongsTo('App\Trip');
    }


}
