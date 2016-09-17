<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{

    /**
     * Shows the group this thing belongs to.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function group() {
      return $this->belongsTo('App\Group');
    }

    /**
     * Returns the users this thing is associated with.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function users() {
      return $this->belongsToMany('App\User');
    }

    /**
     * Returns the comments this thing has.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comments() {
      return $this->hasMany('App\Comment');
    }

    /**
     * Returns the tags this thing is associated with.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function tags() {
      return $this->belongsToMany('App\Tag');
    }


}
