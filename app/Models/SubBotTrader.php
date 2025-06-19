<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubBotTrader extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'bot_trader_id', 'amount', 'status'
    ];

    public function botTrader()
    {
        return $this->belongsTo(BotTrader::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
