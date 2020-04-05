<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'user_image','role_id',
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
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function role()
    {
        return $this->belongsTo('App\Role');
    }

    /**
     * episode likes
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function like_episode(){
        return $this->belongsToMany('App\Episode','episode_user_likes');
    }

    /**
     * series follows
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function follow_series(){
        return $this->belongsToMany('App\Series','series_user_follows');
    }

    /**
     * check if the logged user is admin
     * @return mixed
     */
    public function isAdmin() {
        return $this->role()->where('role', 'admin')->exists();
    }

    /**
     * check if the user like a specific episode
     * @param $episode_id
     * @return bool
     */
    public function is_liked($episode_id){
        return $this->like_episode()->where('episode_id',$episode_id)->exists();

    }

    /**
     * check if user follow a specific series
     * @param $series_id
     * @return bool
     */
    public function is_followed($series_id){
        return $this->follow_series()->where('series_id',$series_id)->exists();
    }


}

