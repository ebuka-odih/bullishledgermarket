<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BotTrader extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'avatar', 'win', 'loss', 'rate', 'min_amount', 'max_amount', 'is_active', 'duration', 'settings'
    ];

    public function subBotTraders()
    {
        return $this->hasMany(SubBotTrader::class);
    }
}
