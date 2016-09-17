<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{

    /**
     * Returns the trips this thing has.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function trips() {
      return $this->hasMany('App\Trip');
    }

    /**
     * Returns the founder this thing has.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function founder() {
      return $this->belongsTo('App\User', 'id', 'founder');
    }

    /**
     * Returns the admin this thing has.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function admin() {
      return $this->belongsTo('App\User', 'id', 'admin');
    }

    /**
     * Returns the users this thing is associated with.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function users() {
      return $this->belongsToMany('App\User');
    }


}
