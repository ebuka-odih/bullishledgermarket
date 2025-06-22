<?php

namespace App\Http\Controllers;

use App\Models\BotTrader;
use App\Models\SubBotTrader;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubBotTraderController extends Controller
{
    public function index()
    {
        $botTraders = BotTrader::where('is_active', true)->get();
        $user = Auth::user();
        $subBotTraders = SubBotTrader::whereUserId(auth()->id())->with('botTrader')->get();
        return view('dashboard.ai-trader.index', compact('botTraders', 'user', 'subBotTraders'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'bot_trader_id' => 'required|exists:bot_traders,id',
            'amount' => 'required|numeric|min:0',
        ]);

        $botTrader = BotTrader::findOrFail($request->bot_trader_id);
        $user = Auth::user();

        // Check if user has sufficient balance
        if ($request->amount > $user->balance) {
            return redirect()->back()->with('error', 'Insufficient balance');
        }

        // Check if minimum amount requirement is met
        if ($request->amount < $botTrader->min_amount) {
            return redirect()->back()->with('error', 'Amount must be at least $' . $botTrader->min_amount);
        }

        // Check if user already has an active subscription for this bot
        $existingSubscription = SubBotTrader::where('user_id', $user->id)
            ->where('bot_trader_id', $request->bot_trader_id)
            ->where('status', 1)
            ->first();

        if ($existingSubscription) {
            return redirect()->back()->with('error', 'You already have an active subscription for this AI trader');
        }

        // Create new subscription
        $subBotTrader = new SubBotTrader();
        $subBotTrader->user_id = $user->id;
        $subBotTrader->bot_trader_id = $request->bot_trader_id;
        $subBotTrader->amount = $request->amount;
        $subBotTrader->status = 1; // Active
        $subBotTrader->save();

        // Deduct amount from user balance
        $user->balance -= $request->amount;
        $user->save();

        return redirect()->back()->with('success', 'AI Trader activated successfully');
    }

    public function history()
    {
        $user = Auth::user();
        $subBotTraders = SubBotTrader::whereUserId(auth()->id())
            ->with('botTrader')
            ->orderBy('created_at', 'desc')
            ->get();
        
        return view('dashboard.ai-trader.history', compact('user', 'subBotTraders'));
    }
} 