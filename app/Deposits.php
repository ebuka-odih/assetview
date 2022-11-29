<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deposits extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function transId()
    {
        return "#TNX43265".$this->id;
    }

    public function crypto_asset()
    {
        return $this->belongsTo(CryptoAssets::class, "crypto_asset_id");
    }

    public function status()
    {
        if ($this->status == 0){
            return "<span class='badge bg-warning text text-uppercase'>Pending</span>";
        }elseif ($this->status > 0){
            return "<span class='badge bg-success text text-uppercase'>Successful</span>";
        }else{
            return "<span class='badge badge-danger text text-uppercase'>Cancelled</span>";
        }
    }
    public function adminStatus()
    {
        if ($this->status == 0){
            return "<span class='badge bg-warning text text-uppercase'>Pending</span>";
        }elseif ($this->status > 0){
            return "<span class='badge bg-success text text-uppercase'>Successful</span>";
        }else{
            return "<span class='badge bg-danger text text-uppercase'>Cancelled</span>";
        }
    }

    public function roi()
    {
      return ($this->crypto_asset->interest * $this->crypto_asset->amount) / 100;
    }


}
