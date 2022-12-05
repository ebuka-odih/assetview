<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Funding extends Model
{
    protected $guarded = [];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function fund_type()
    {
        if ($this->type == "Bonus")
        {
            return "Bonus";
        }elseif ($this->type == "Referral-Bonus"){
            return "Referral-Bonus";
        }
        return "Profit";
    }

    public function status()
    {
        if ($this->status == 0){
            return "<span class='label label-warning'>Pending</span>";
        }elseif ($this->status > 0){
            return "<span class='label label-success'>Successful</span>";
        }else{
            return "<span class='label label-danger'>Cancelled</span>";
        }
    }
}
