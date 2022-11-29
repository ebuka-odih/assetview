<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CryptoAssets extends Model
{
    public function deposit()
    {
        return $this->hasMany(Deposits::class);
    }
}
