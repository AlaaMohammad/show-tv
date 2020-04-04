<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    //
    /**
     * @var array
     */
    protected $fillable = ['title','description','airing_time_day','airing_time_hour','series_id'];


    /**
     * Episode belongs to Series
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     *
     */

    public function series(){
        return $this->belongsTo('App\Series');
    }
}
