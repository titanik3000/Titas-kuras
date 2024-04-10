{{-- resources/views/fuel_records/edit.blade.php --}}
<form method="POST" action="{{ route('fuel_records.update', $fuel_record->id) }}">
    @csrf
    @method('PUT')
    {{-- Add form fields here with $fuel_record values --}}
    <input type="text" name="pavadinimas" value="{{ $fuel_record->pavadinimas }}">
    <input type="text" name="kodas" value="{{ $fuel_record->kodas }}">
    <input type="number" step="0.01" name="uzpiltas_kuro_kiekis" value="{{ $fuel_record->uzpiltas_kuro_kiekis }}">
    <input type="date" name="data" value="{{ $fuel_record->data }}">
    <button type="submit">Update Record</button>
</form>