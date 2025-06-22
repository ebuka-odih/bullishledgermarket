<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SubBotTrader;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubBotTraderController extends Controller
{
    public function index()
    {
        $subBotTraders = SubBotTrader::with(['user', 'botTrader'])
            ->orderBy('created_at', 'desc')
            ->get();
        
        return view('admin.sub_bot_trader.index', compact('subBotTraders'));
    }

    public function updateProfit(Request $request, $id)
    {
        $request->validate([
            'profit' => 'required|numeric|min:0',
        ]);

        $subBotTrader = SubBotTrader::findOrFail($id);
        $user = $subBotTrader->user;

        // Update the profit
        $subBotTrader->profit = $request->profit;
        $subBotTrader->save();

        // Add profit to user's balance
        $user->balance += $request->profit;
        $user->save();

        return redirect()->route('admin.sub_bot_trader.index')
            ->with('success', 'Profit updated successfully and added to user balance.');
    }

    public function fundProfit(Request $request, $id)
    {
        $request->validate([
            'fund_amount' => 'required|numeric|min:0',
        ]);

        $subBotTrader = SubBotTrader::findOrFail($id);
        $user = $subBotTrader->user;

        // Add the funded amount to profit
        $subBotTrader->profit += $request->fund_amount;
        $subBotTrader->save();

        // Add funded amount to user's balance
        $user->balance += $request->fund_amount;
        $user->save();

        return redirect()->route('admin.sub_bot_trader.index')
            ->with('success', 'Profit funded successfully and added to user balance.');
    }
} 