@extends('admin.layouts.app')

@section('content')
<div class="p-4 sm:p-6 xl:p-8">
    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md">
        <div class="p-4 block sm:flex items-center justify-between border-b border-gray-200 dark:border-gray-700">
            <div class="w-full mb-1">
                <div class="mb-4">
                    <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">AI Trader Subscriptions</h1>
                </div>
                
            </div>
        </div>

        <div class="flex flex-col p-4">
            <div class="overflow-x-auto">
                <div class="inline-block min-w-full align-middle">
                    <div class="overflow-hidden">
                        <table class="min-w-full divide-y divide-gray-200 table-fixed dark:divide-gray-600">
                            <thead class="bg-gray-100 dark:bg-gray-700">
                                <tr>
                                    <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-white">
                                        ID
                                    </th>
                                    <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-white">
                                        User
                                    </th>
                                    <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-white">
                                        AI Trader
                                    </th>
                                    <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-white">
                                        Amount
                                    </th>
                                    <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-white">
                                        Profit
                                    </th>
                                    <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-white">
                                        Status
                                    </th>
                                    <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-white">
                                        Date
                                    </th>
                                    <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-white">
                                        Actions
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                                @foreach($subBotTraders as $subscription)
                                <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                                    <td class="p-4 text-sm font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                        <span class="font-semibold">#{{ $subscription->id }}</span>
                                    </td>
                                    <td class="p-4 text-sm font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                        <div class="text-base font-semibold text-gray-900 dark:text-white">{{ $subscription->user->name ?? 'N/A' }}</div>
                                        <div class="text-sm font-normal text-gray-500 dark:text-gray-400">{{ $subscription->user->email ?? 'N/A' }}</div>
                                    </td>
                                    <td class="p-4 text-sm font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                        <div class="text-base font-semibold text-gray-900 dark:text-white">{{ $subscription->botTrader->name ?? 'N/A' }}</div>
                                        <div class="text-sm font-normal text-gray-500 dark:text-gray-400">Rate: {{ $subscription->botTrader->rate ?? 'N/A' }}%</div>
                                    </td>
                                    <td class="p-4 text-sm font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                        ${{ number_format($subscription->amount, 2) }}
                                    </td>
                                    <td class="p-4 text-sm font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                        <span class="font-semibold text-green-600">${{ number_format($subscription->profit, 2) }}</span>
                                    </td>
                                    <td class="p-4 text-sm font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                        @if($subscription->status == 0)
                                            <span class="bg-yellow-100 text-yellow-800 text-xs font-medium px-2.5 py-0.5 rounded dark:bg-yellow-900 dark:text-yellow-300">Pending</span>
                                        @elseif($subscription->status == 1)
                                            <span class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">Active</span>
                                        @else
                                            <span class="bg-red-100 text-red-800 text-xs font-medium px-2.5 py-0.5 rounded dark:bg-red-900 dark:text-red-300">Inactive</span>
                                        @endif
                                    </td>
                                    <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                        {{ date('M d, Y', strtotime($subscription->created_at)) }}
                                    </td>
                                    <td class="p-4 space-x-2 whitespace-nowrap">
                                        <button data-modal-target="fund-profit-modal-{{ $subscription->id }}" data-modal-toggle="fund-profit-modal-{{ $subscription->id }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                                            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z" clip-rule="evenodd"></path>
                                            </svg>
                                            Fund Profit
                                        </button>
                                        <button data-modal-target="update-profit-modal-{{ $subscription->id }}" data-modal-toggle="update-profit-modal-{{ $subscription->id }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                                            </svg>
                                            Update Profit
                                        </button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Fund Profit Modals -->
@foreach($subBotTraders as $subscription)
<div id="fund-profit-modal-{{ $subscription->id }}" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    Fund Profit
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="fund-profit-modal-{{ $subscription->id }}">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <form class="p-4 md:p-5" action="{{ route('admin.sub_bot_trader.fund_profit', $subscription->id) }}" method="POST">
                @csrf
                <div class="grid gap-4 mb-4">
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-900 dark:text-white mb-2">User</label>
                        <p class="text-sm text-gray-600 dark:text-gray-400">{{ $subscription->user->name ?? 'N/A' }} ({{ $subscription->user->email ?? 'N/A' }})</p>
                    </div>
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-900 dark:text-white mb-2">AI Trader</label>
                        <p class="text-sm text-gray-600 dark:text-gray-400">{{ $subscription->botTrader->name ?? 'N/A' }}</p>
                    </div>
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-900 dark:text-white mb-2">Current Profit</label>
                        <p class="text-sm font-semibold text-green-600">${{ number_format($subscription->profit, 2) }}</p>
                    </div>
                    <div>
                        <label for="fund_amount" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fund Amount ($)</label>
                        <input type="number" step="0.01" name="fund__amount" id="fund_amount" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="0.00" required>
                    </div>
                </div>
                <div class="flex items-center justify-end space-x-2">
                    <button type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600" data-modal-hide="fund-profit-modal-{{ $subscription->id }}">
                        Cancel
                    </button>
                    <button type="submit" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                        Fund Profit
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach

<!-- Update Profit Modals -->
@foreach($subBotTraders as $subscription)
<div id="update-profit-modal-{{ $subscription->id }}" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    Update Profit
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="update-profit-modal-{{ $subscription->id }}">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <form class="p-4 md:p-5" action="{{ route('admin.sub_bot_trader.update_profit', $subscription->id) }}" method="POST">
                @csrf
                <div class="grid gap-4 mb-4">
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-900 dark:text-white mb-2">User</label>
                        <p class="text-sm text-gray-600 dark:text-gray-400">{{ $subscription->user->name ?? 'N/A' }} ({{ $subscription->user->email ?? 'N/A' }})</p>
                    </div>
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-900 dark:text-white mb-2">AI Trader</label>
                        <p class="text-sm text-gray-600 dark:text-gray-400">{{ $subscription->botTrader->name ?? 'N/A' }}</p>
                    </div>
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-900 dark:text-white mb-2">Current Profit</label>
                        <p class="text-sm font-semibold text-green-600">${{ number_format($subscription->profit, 2) }}</p>
                    </div>
                    <div>
                        <label for="profit" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">New Profit Amount ($)</label>
                        <input type="number" step="0.01" name="profit" id="profit" value="{{ $subscription->profit }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="0.00" required>
                    </div>
                </div>
                <div class="flex items-center justify-end space-x-2">
                    <button type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600" data-modal-hide="update-profit-modal-{{ $subscription->id }}">
                        Cancel
                    </button>
                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                        Update Profit
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach

@endsection 