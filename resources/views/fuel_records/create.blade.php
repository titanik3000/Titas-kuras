{{-- resources/views/fuel_records/create.blade.php --}}
<form method="POST" action="{{ route('fuel_records.store') }}">
    @csrf
    {{-- Add form fields here --}}
    <label >transporto pavadinimas:</label>
    <input type="text" name="pavadinimas"></br>
    <label>transporto priemonės kodas:</label>
    <input type="text" name="kodas"></br>
    <label>kuro kiekis:</label>
    <input type="number" step="0.01" name="uzpiltas_kuro_kiekis"></br>
    <label>užpylimo data:</label>
    <input type="date" name="data"></br>
    <button type="submit">Add Record</button>
</form>
