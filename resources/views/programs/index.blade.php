@extends('layouts.programs')

@section('content')

<h1>Programs</h1>
<table>
  <thead>
    <tr>
      <th>Name</th>
      <th>Default System</th>
      <th>Ensembles</th>
      <th>Vocalists</th>
    </tr>
  </thead>
  <tbody>
    @foreach($programs as $program)
      <tr>
        <td><a href='{{ $program->getDetailsUrl() }}'>{{ $program->name }}</a></td>
        <td>{{ $program->defaultSystem->name }}</td>
        <td>{{ $program->ensembles->count() }}</td>
        <td>{{ $program->vocalists->count() }}</td>
      </tr>
    @endforeach
  </tbody>
</table>

@endsection