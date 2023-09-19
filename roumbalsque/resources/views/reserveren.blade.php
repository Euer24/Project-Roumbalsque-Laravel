@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Reserveren</h2>

    <form method="POST" action="{{ route('reserveren') }}">
        @csrf

        <div class="form-group">
            <label for="name">Naam:</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="email">E-mail:</label>
            <input type="email" name="email" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="date">Datum:</label>
            <input type="date" name="date" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="people">Aantal personen:</label>
            <input type="number" name="people" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="table_number">Tafelnummer:</label>
            <input type="text" name="table_number" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Reserveer</button>
    </form>
</div>
@endsection

