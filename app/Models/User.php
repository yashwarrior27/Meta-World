<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $guarded = [];

    public function TotalTransaction()
    {
        return $this->hasOne(Transaction::class,'user_id','id')->selectRaw('
        SUM(IF(trans=1,amount,0)) as direct_income,
        SUM(IF(trans=2,amount,0)) as roi_income,
        SUM(IF(trans=3,amount,0)) as level_income,
        SUM(IF(trans=4,amount,0)) as withdrawal
        ')->where('status',1);
    }

    public function getLevelIncomeAttribute()
    {
        return $this?->TotalTransaction?->level_income;
    }

    public function getRoiIncomeAttribute()
    {
        return $this?->TotalTransaction?->roi_income;
    }

    public function getDirectIncomeAttribute()
    {
        return $this?->TotalTransaction?->direct_income;
    }

    public function getTotalIncomeAttribute()
    {
        return (
        $this?->TotalTransaction?->direct_income+
        $this?->TotalTransaction?->roi_income+
        $this?->TotalTransaction?->level_income) - $this?->TotalTransaction?->withdrawal;
    }

    public function Rank()
    {
        return $this->hasOne(Rank::class,'id','rank_id');
    }
}
