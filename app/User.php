<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
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
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function status()
    {
        if ($this->status == 1)
        {
            return "<span class='badge bg-primary'>Active</span>";
        }
        return "<span class='badge bg-danger'>Inactive</span>";
    }

    public function withdraw()
    {
        return $this->hasMany(Withdraw::class, 'user_id');
    }
    public function deposit()
    {
        return $this->hasMany(Deposits::class, 'user_id');
    }
}
