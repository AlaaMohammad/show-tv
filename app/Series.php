<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Series extends Model
{
    //
    //
    /**
     * @var array
     */
    protected $fillable = ['title','description','type','airing_time_from','airing_time_to','airing_time_hour'];

    /**
     * Series has many episodes
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function episode(){
        return $this->hasMany('App\Episode');
    }
}
