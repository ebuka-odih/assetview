<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

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

    public function userId()
    {
        return "SK0234".$this->id;
    }


    public function referrer()
    {
        return $this->belongsTo(User::class, 'referrer_id', 'id');
    }
    public function referrals()
    {
        return $this->hasMany(User::class, 'referrer_id', 'id');
    }
    public function all_referrals()
    {
        $refs = User::whereReferredBy($this->id)->get();
        return $refs;
    }

    public function referredBy()
    {
        return $this->belongsTo(User::class, 'referred_by', 'id');
    }
    public function getReferralLinkAttribute()
    {
        return $this->referral_link = route('register', ['ref' => $this->username, 'id'=> $this->id]);
    }
}
