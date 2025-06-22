<?php

namespace Database\Seeders;

use App\Models\BotTrader;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BotTraderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $botTraders = [
            [
                'name' => 'Alpha AI Trader',
                'avatar' => 'files/ai-trader-1.png',
                'win' => 85,
                'loss' => 15,
                'rate' => 85.5,
                'min_amount' => 100.00,
                'max_amount' => 10000.00,
                'is_active' => true,
                'duration' => 30,
                'settings' => json_encode(['strategy' => 'momentum', 'risk_level' => 'medium'])
            ],
            [
                'name' => 'Beta AI Trader',
                'avatar' => 'files/ai-trader-2.png',
                'win' => 78,
                'loss' => 22,
                'rate' => 78.0,
                'min_amount' => 250.00,
                'max_amount' => 25000.00,
                'is_active' => true,
                'duration' => 45,
                'settings' => json_encode(['strategy' => 'scalping', 'risk_level' => 'high'])
            ],
            [
                'name' => 'Gamma AI Trader',
                'avatar' => 'files/ai-trader-3.png',
                'win' => 92,
                'loss' => 8,
                'rate' => 92.0,
                'min_amount' => 500.00,
                'max_amount' => 50000.00,
                'is_active' => true,
                'duration' => 60,
                'settings' => json_encode(['strategy' => 'swing', 'risk_level' => 'low'])
            ],
            [
                'name' => 'Delta AI Trader',
                'avatar' => 'files/ai-trader-4.png',
                'win' => 73,
                'loss' => 27,
                'rate' => 73.0,
                'min_amount' => 150.00,
                'max_amount' => 15000.00,
                'is_active' => true,
                'duration' => 30,
                'settings' => json_encode(['strategy' => 'day_trading', 'risk_level' => 'medium'])
            ],
            [
                'name' => 'Epsilon AI Trader',
                'avatar' => 'files/ai-trader-5.png',
                'win' => 88,
                'loss' => 12,
                'rate' => 88.0,
                'min_amount' => 300.00,
                'max_amount' => 30000.00,
                'is_active' => true,
                'duration' => 90,
                'settings' => json_encode(['strategy' => 'position_trading', 'risk_level' => 'low'])
            ]
        ];

        foreach ($botTraders as $botTrader) {
            BotTrader::create($botTrader);
        }
    }
} 