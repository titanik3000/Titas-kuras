<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

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
    <table class="text-white">
    <thead class="text-white">
        <tr>
            <th class="text-white">Pavadinimas</th>
            <th class="text-white">Kodas</th>
            <th class="text-white">Užpiltas kuro kiekis</th>
            <th class="text-white">Data</th>
        </tr>
    </thead>
    <tbody>
    @forelse ($records as $record)
    <tr>
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


