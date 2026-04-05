<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Payments') }}
        </h2>
    </x-slot>

    <div class="py-4">
        <div class="max-w-full mx-auto sm:px-2 lg:px-2">
            <div class="bg-white/50 dark:bg-[#000080]/80 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">Reference</th>
                                    <th scope="col">Transaction Code</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">Paid At</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($payments as $payment)
                                    <tr class="">
                                        <td>{{ $payment->reference }}</td>
                                        <td>{{ $payment->transaction_code }}</td>
                                        <td>{{ $payment->amount }}</td>
                                        <td>{{ $payment->created_at }}</td>
                                        <td>{{ $payment->status }}</td>
                                        <td>
                                            <livewire:request-user-to-pay :payment="$payment" />
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
{{ $payments->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
