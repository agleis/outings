<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Returns the trips this thing is associated with.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function trips() {
      return $this->belongsToMany('App\Trip');
    }

    /**
     * Returns the groups this thing is associated with.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function groups() {
      return $this->belongsToMany('App\Group');
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
     * Returns the administrating this thing has.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function administrating() {
      return $this->hasMany('App\Group');
    }

    /**
     * Returns the founded this thing has.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function founded() {
      return $this->hasMany('App\Group');
    }


}
