@extends('layouts.app')

@section('content')

<h1>{{ $ensemble->name }}</h1>
<table>
  <thead>
    <tr>
      <th colspan="2">Vocalists</th>
    </tr>
    <tr>
      <th>Name</th>
      <th>Sex</th>
    </tr>
  </thead>
  <tbody>
    @foreach($ensemble->vocalists->sortBy('family_name') as $vocalist)
      <tr>
        <td><a href='{{ '#' }}'>{{ $vocalist->given_name.' '.$vocalist->family_name }}</a></td>
        <td>{{ $vocalist->sex }}</td>
      </tr>
    @endforeach
  </tbody>
</table>

@endsection