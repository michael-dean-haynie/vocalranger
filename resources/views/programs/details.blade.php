@extends('layouts.programs')

@section('content')

<h1>{{ $program->name }}</h1>
<table>
  <thead>
    <tr>
      <th colspan="2">Ensembles</th>
    </tr>
    <tr>
      <th>Name</th>
      <th>Vocalists</th>
    </tr>
  </thead>
  <tbody>
    @foreach($program->ensembles as $ensemble)
      <tr>
        <td><a href='{{ $ensemble->getDetailsUrl() }}'>{{ $ensemble->name }}</a></td>
        <td>{{ $ensemble->vocalists->count() }}</td>
      </tr>
    @endforeach
  </tbody>
</table>

@endsection