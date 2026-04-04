<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-4">
        <div class="max-w-full mx-auto sm:px-2 lg:px-2">
            <div class="bg-white/50 dark:bg-[#000080]/80 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="row">
                        @hasrole('admin')
                            <div class="col-sm-4">
                                <div class="card text-start">
                                    <div class="card-header">
                                        <h3 class="card-title"><i class="fa fa-users" aria-hidden="true"></i> Users</h3>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text">All: {{ $users->count() }}</p>
                                    </div>
                                    <div class="card-footer">
                                        <a class="btn btn-outline-info" href="{{ route('dashboard.users') }}">View all</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="card text-start">
                                    <div class="card-header">
                                        <h3 class="card-title"><i class="fa fa-book" aria-hidden="true"></i> Bookings</h3>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text">All: {{ $bookings->count() }}</p>
                                    </div>
                                    <div class="card-footer">
                                        <a class="btn btn-outline-info" href="{{ route('bookings') }}">View All</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="card text-start">
                                    <div class="card-header">
                                        <h3 class="card-title"><i class="fa fa-dollar-sign" aria-hidden="true"></i> Payments
                                        </h3>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text">All: {{ $payments->count() }}</p>
                                    </div>
                                    <div class="card-footer">
                                        <a class="btn btn-outline-info" href="{{ route('dashboard.payments') }}">View
                                            All</a>
                                    </div>
                                </div>
                            </div>
                        @endhasrole
                        @hasrole('client')
                            <div class="col-sm-4">
                                <div class="card text-start">
                                    <div class="card-header">
                                        <h3 class="card-title"><i class="fa fa-book" aria-hidden="true"></i> Bookings</h3>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text">All: {{ $bookings->count() }}</p>
                                    </div>
                                    <div class="card-footer">
                                        <a class="btn btn-outline-info" href="{{ route('bookings') }}">View All</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="card text-start">
                                    <div class="card-header">
                                        <h3 class="card-title"><i class="fa fa-dollar-sign" aria-hidden="true"></i> Payments
                                        </h3>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text">All: {{ $payments->count() }}</p>
                                    </div>
                                    <div class="card-footer">
                                        {{-- <a href="{{ route('') }}"></a> --}}
                                    </div>
                                </div>
                            </div>
                        @endhasrole
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</x-app-layout>
