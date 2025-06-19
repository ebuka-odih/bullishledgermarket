@extends('admin.layouts.app')
@section('content')


 <div class="px-4 pt-5">



    <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
        <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-tab" data-tabs-toggle="#default-tab-content" role="tablist">
            <li class="me-2" role="presentation">
              <h3 class="text-xl font-bold text-gray-900 dark:text-white">Ai Trader</h3>
            </li>
        </ul>
    </div>
    <div id="default-tab-content">
        <div class="p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="ai-trader" role="tabpanel" aria-labelledby="ai-trader-tab">
            <div class="p-4 mt-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                <!-- Card header -->
                <div class="items-center justify-between lg:flex">
                    <div class="mb-4 lg:mb-0">
                        <h3 class="mb-2 text-xl font-bold text-gray-900 dark:text-white">AI Trader Plans</h3>
                    </div>
                    <button data-modal-target="crud-modal" data-modal-toggle="crud-modal" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                        Add Ai Trader
                    </button>
                </div>
                <!-- Table -->
                <div class="flex flex-col mt-6">
                    <div class="overflow-x-auto rounded-lg">
                        <div class="inline-block min-w-full align-middle">
                            <div class="overflow-hidden shadow sm:rounded-lg">
                                <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-600">
                                    <thead class="bg-gray-50 dark:bg-gray-700">
                                        <tr>
                                            <th scope="col" class="p-4 text-xs font-medium tracking-wider text-left text-gray-500 uppercase dark:text-white">#</th>
                                            <th scope="col" class="p-4 text-xs font-medium tracking-wider text-left text-gray-500 uppercase dark:text-white">Created</th>
                                            <th scope="col" class="p-4 text-xs font-medium tracking-wider text-left text-gray-500 uppercase dark:text-white">Name</th>
                                            <th scope="col" class="p-4 text-xs font-medium tracking-wider text-left text-gray-500 uppercase dark:text-white">Avatar</th>
                                            <th scope="col" class="p-4 text-xs font-medium tracking-wider text-left text-gray-500 uppercase dark:text-white">Win</th>
                                            <th scope="col" class="p-4 text-xs font-medium tracking-wider text-left text-gray-500 uppercase dark:text-white">Loss</th>
                                            <th scope="col" class="p-4 text-xs font-medium tracking-wider text-left text-gray-500 uppercase dark:text-white">Rate</th>
                                            <th scope="col" class="p-4 text-xs font-medium tracking-wider text-left text-gray-500 uppercase dark:text-white">Min Amount</th>
                                            <th scope="col" class="p-4 text-xs font-medium tracking-wider text-left text-gray-500 uppercase dark:text-white">Active</th>
                                            <th scope="col" class="p-4 text-xs font-medium tracking-wider text-left text-gray-500 uppercase dark:text-white">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white dark:bg-gray-800">
                                        @foreach($botTraders as $index => $botTrader)
                                        <tr>
                                            <td class="p-4 text-sm font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                                <span class="font-semibold">#{{ $index + 1 }}</span>
                                            </td>
                                            <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                {{ date('M d, Y', strtotime($botTrader->created_at ?? '')) }}
                                            </td>
                                            <td class="p-4 text-sm font-semibold text-gray-900 whitespace-nowrap dark:text-white">
                                                {{ $botTrader->name ?? '' }}
                                            </td>
                                            <td class="p-4 text-sm font-semibold text-gray-900 whitespace-nowrap dark:text-white">
                                                <img src="{{ asset('storage/' . $botTrader->avatar) }}" alt="avatar" class="w-8 h-8 rounded-full">
                                            </td>
                                            <td class="p-4 text-sm font-semibold text-gray-900 whitespace-nowrap dark:text-white">
                                                {{ $botTrader->win ?? '' }}
                                            </td>
                                            <td class="p-4 text-sm font-semibold text-gray-900 whitespace-nowrap dark:text-white">
                                                {{ $botTrader->loss ?? '' }}
                                            </td>
                                            <td class="p-4 text-sm font-semibold text-gray-900 whitespace-nowrap dark:text-white">
                                                {{ $botTrader->rate ?? '' }}
                                            </td>
                                            <td class="p-4 text-sm font-semibold text-gray-900 whitespace-nowrap dark:text-white">
                                                {{ $botTrader->min_amount ?? '' }}$
                                            </td>
                                            <td class="p-4 text-sm font-semibold text-gray-900 whitespace-nowrap dark:text-white">
                                                {{ $botTrader->is_active ? 'Yes' : 'No' }}
                                            </td>
                                            <td class="p-4 space-x-2 whitespace-nowrap">
                                                <button data-modal-target="edit-modal-{{ $botTrader->id }}" data-modal-toggle="edit-modal-{{ $botTrader->id }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                                                    <x-gmdi-edit-square class="w-4 h-4 mr-2"/>
                                                </button>
                                                <button data-modal-toggle="delete-bottrader-modal-{{ $botTrader->id }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:ring-red-300 dark:focus:ring-red-900">
                                                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                                                </button>
                                            </td>
                                        </tr>
                                        <!-- Edit Modal and Delete Modal would go here -->
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card Footer -->
                <div class="flex items-center justify-between pt-3 sm:pt-6">
                    <div></div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Create Modal -->
<div id="crud-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-lg max-h-full">
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Create Ai Trader
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="crud-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <div class="p-4 md:p-5">
                <form class="space-y-4" action="{{ route('admin.bot_trader.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="grid gap-4 mb-4 grid-cols-2">
                        <div class="col-span-2">
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                            <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="AI Trader Name" required>
                        </div>
                        <div class="col-span-2">
                            <label for="avatar" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Avatar</label>
                            <input type="file" name="avatar" id="avatar" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>
                        <div>
                            <label for="win" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Win</label>
                            <input type="number" name="win" id="win" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>
                        <div>
                            <label for="loss" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Loss</label>
                            <input type="number" name="loss" id="loss" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>
                        <div>
                            <label for="rate" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Rate</label>
                            <input type="number" step="0.01" name="rate" id="rate" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>
                        <div>
                            <label for="min_amount" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Min Amount</label>
                            <input type="number" step="0.01" name="min_amount" id="min_amount" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                        </div>
                        <div class="col-span-2 flex items-center">
                            <input type="checkbox" name="is_active" id="is_active" value="1" checked class="mr-2">
                            <label for="is_active" class="text-gray-900 dark:text-white">Active</label>
                        </div>
                    </div>
                    <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                        Create
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Edit Modals -->
@foreach($botTraders as $botTrader)
<div id="edit-modal-{{ $botTrader->id }}" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-lg max-h-full">
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Edit Ai Trader
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="edit-modal-{{ $botTrader->id }}">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <div class="p-4 md:p-5">
                <form class="space-y-4" action="{{ route('admin.bot_trader.update', $botTrader->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="grid gap-4 mb-4 grid-cols-2">
                        <div class="col-span-2">
                            <label for="name-{{ $botTrader->id }}" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                            <input type="text" name="name" id="name-{{ $botTrader->id }}" value="{{ $botTrader->name }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                        </div>
                        <div class="col-span-2">
                            <label for="avatar-{{ $botTrader->id }}" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Avatar</label>
                            <input type="file" name="avatar" id="avatar-{{ $botTrader->id }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            @if($botTrader->avatar)
                                <img src="{{ asset('storage/' . $botTrader->avatar) }}" alt="avatar" class="w-8 h-8 rounded-full mt-2">
                            @endif
                        </div>
                        <div>
                            <label for="win-{{ $botTrader->id }}" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Win</label>
                            <input type="number" name="win" id="win-{{ $botTrader->id }}" value="{{ $botTrader->win }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>
                        <div>
                            <label for="loss-{{ $botTrader->id }}" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Loss</label>
                            <input type="number" name="loss" id="loss-{{ $botTrader->id }}" value="{{ $botTrader->loss }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>
                        <div>
                            <label for="rate-{{ $botTrader->id }}" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Rate</label>
                            <input type="number" step="0.01" name="rate" id="rate-{{ $botTrader->id }}" value="{{ $botTrader->rate }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>
                        <div>
                            <label for="min_amount-{{ $botTrader->id }}" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Min Amount</label>
                            <input type="number" step="0.01" name="min_amount" id="min_amount-{{ $botTrader->id }}" value="{{ $botTrader->min_amount }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                        </div>
                        <div class="col-span-2 flex items-center">
                            <input type="checkbox" name="is_active" id="is_active-{{ $botTrader->id }}" value="1" {{ $botTrader->is_active ? 'checked' : '' }} class="mr-2">
                            <label for="is_active-{{ $botTrader->id }}" class="text-gray-900 dark:text-white">Active</label>
                        </div>
                    </div>
                    <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                        Update
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach



@endsection
