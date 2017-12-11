@extends('layouts.programs')

@section('content')
{{-- {{ var_dump($programs) }} --}}
<h1>Programs</h1>
<table>
  <thead>
    <tr>
      <th>Name</th>
    </tr>
  </thead>
  <tbody>
    @foreach($programs as $program)
      <tr>
        <td>{{ $program->name }}</td>
      </tr>
    @endforeach
  </tbody>
</table>
@endsection