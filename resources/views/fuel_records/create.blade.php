<style>
.form-container {
    max-width: 600px;
    margin: 2rem auto;
    padding: 2rem;
    background-color: #2d3748;
    border-radius: 8px;
    color: #f8f8f8;
}

.form-container div {
    margin-bottom: 1rem;
}

.form-container label {
    display: block;
    margin-bottom: 0.5rem;
}

.form-container input[type="text"],
.form-container input[type="number"],
.form-container input[type="date"] {
    width: 100%;
    padding: 0.5rem;
    border-radius: 4px;
    border: 1px solid #4a5568;
    background-color: #1a202c;
    color: #f8f8f8;
}

.form-container input[type="text"]:focus,
.form-container input[type="number"]:focus,
.form-container input[type="date"]:focus {
    outline: none;
    border-color: #63b3ed;
    box-shadow: 0 0 0 1px #63b3ed;
}

.form-container button[type="submit"] {
    padding: 0.5rem 1rem;
    background-color: #4c51bf;
    color: #f8f8f8;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.2s;
}

.form-container button[type="submit"]:hover {
    background-color: #667eea;
}

/* Style for breaks to be consistent with spacing */
.form-container br {
    margin-bottom: 1rem;
    content: "";
    display: block;
}
</style>
{{-- resources/views/fuel_records/create.blade.php --}}
<form method="POST" action="{{ route('fuel_records.store') }}" class="form-container">
    @csrf
    {{-- Add form fields here --}}
    <div class="form-group">
        <label >transporto pavadinimas:</label>
        <input type="text" name="pavadinimas" id="pavadinimas" class="form-control">
    </div>
    <div class="form-group">
        <label>transporto priemonės kodas:</label>
        <input type="text" name="kodas" id="kodas" class="form-control"></br>
    </div>
    <div class="form-group">
        <label>kuro kiekis:</label>
        <input type="number" step="0.01" name="uzpiltas_kuro_kiekis" id="uzpiltas_kuro_kiekis" class="form-control"></br>
    </div>
    <div class="form-group">
        <label>užpylimo data:</label>
        <input type="date" name="data" id="data" class="form-control"></br>
    </div>
    <div class="form-group">
        <button type="submit" class="btn">Add Record</button>
    </div>
    
</form>
