<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    @php
        // Get the current direction or default to 'asc'
        $direction = request('direction', 'asc');
    @endphp
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
    <a href="{{ route('fuel_records.create') }}" class="btn btn-success text-white">Add New Record</a>
    <table class="custom-table">
    <thead class="text-white">
        <tr class="custom-table-header">
            <th class="text-white"><a href="{{ route('dashboard', ['sort_by' => 'pavadinimas', 'direction' => $direction === 'asc' ? 'desc' : 'asc']) }}">Pavadinimas</a></th>
            <th class="text-white"><a href="{{ route('dashboard', ['sort_by' => 'kodas', 'direction' => $direction === 'asc' ? 'desc' : 'asc']) }}">Kodas</a></th>
            <th class="text-white"><a href="{{ route('dashboard', ['sort_by' => 'uzpiltas_kuro_kiekis', 'direction' => $direction === 'asc' ? 'desc' : 'asc']) }}">Užpiltas kuro kiekis</a></th>
            <th class="text-white"><a href="{{ route('dashboard', ['sort_by' => 'data', 'direction' => $direction === 'asc' ? 'desc' : 'asc']) }}">Data</a></th>
        </tr>
    </thead>
    <tbody>
    @forelse ($records as $record)
    <tr class="custom-table-row">
        <td >{{ $record->pavadinimas }}</td>
        <td >{{ $record->kodas }}</td>
        <td >{{ $record->uzpiltas_kuro_kiekis }}</td>
        <td >{{ $record->data }}</td>
        <td><a href="{{ route('fuel_records.edit', $record->id) }}" class="btn btn-primary text-white">Edit</a></td>
    </tr>
@empty
    <tr ><td colspan="4" class="taxt-white">No records found.</td></tr>
   
@endforelse
    </tbody>
</table>
</x-app-layout>


