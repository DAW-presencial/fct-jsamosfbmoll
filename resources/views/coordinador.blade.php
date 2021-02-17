@extends('parts.main')

@section('main')

<h1>Coordinadores</h1>

<form action="{{ route('coordinador') }}" method="POST">
    @csrf
    <label for="nif">NIF:</label>
    <input name="nif" type="text" id="nif" required>
    <br/>
    <label for="name">Nombre:</label>
    <input name="name" type="text" id="name" required>
    <br/>
    <button type="submit">Añadir coordinador</button>
</form>

<br/>
<br/>
<br/>
<br/>

<table>
    <tr>
        <th>NIF</th>
        <th>Nombre</th>
    </tr>
@foreach ($coordinadores as $coordinador)
    <tr>
        <td>{{ $coordinador->nif }}</td>
        <td>{{ $coordinador->nombre }}</td>
    </tr>
@endforeach
</table>

@endsection