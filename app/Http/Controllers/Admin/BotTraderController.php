<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BotTrader;

class BotTraderController extends Controller
{
    public function index()
    {
        $botTraders = BotTrader::all();
        return view('admin.bot_trader.index', compact('botTraders'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'win' => 'nullable|integer',
            'loss' => 'nullable|integer',
            'rate' => 'nullable|numeric',
            'min_amount' => 'required|numeric',
//            'max_amount' => 'nullable|numeric',
            'is_active' => 'nullable|boolean',
            'duration' => 'nullable|integer',
            'settings' => 'nullable|array',
        ]);
        if ($request->hasFile('avatar')) {
            $avatarPath = $request->file('avatar')->store('files', 'public');
            $data['avatar'] = $avatarPath;
        }
        if (isset($data['settings'])) {
            $data['settings'] = json_encode($data['settings']);
        }
        BotTrader::create($data);
        return redirect()->route('admin.bot_trader.index')->with('success', 'Bot Trader created successfully.');
    }

    public function update(Request $request, $id)
    {
        $botTrader = BotTrader::findOrFail($id);
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'win' => 'nullable|integer',
            'loss' => 'nullable|integer',
            'rate' => 'nullable|numeric',
            'min_amount' => 'required|numeric',
            'is_active' => 'nullable|boolean',
            'duration' => 'nullable|integer',
            'settings' => 'nullable|array',
        ]);
        if ($request->hasFile('avatar')) {
            if ($botTrader->avatar) {
                \Storage::delete('public/' . $botTrader->avatar);
            }
            $avatarPath = $request->file('avatar')->store('files', 'public');
            $data['avatar'] = $avatarPath;
        }
        if (isset($data['settings'])) {
            $data['settings'] = json_encode($data['settings']);
        }
        $botTrader->update($data);
        return redirect()->route('admin.bot_trader.index')->with('success', 'Bot Trader updated successfully.');
    }
}
