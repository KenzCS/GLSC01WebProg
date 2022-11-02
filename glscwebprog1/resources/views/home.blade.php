@extends('template')

@section('title', 'Welcome User!')

@section('content')
<h3>This website helps user knowledge about Persona Element & Skills in Dungeon </h3>

{{-- @foreach ($compadium_data as $compadiums)
@if ($compadiums->elements ==  "thunder")
    <img src="{{$compadiums -> skills_url}}" alt="">
@else
<video src="{{$compadiums -> skills_url}}" alt="">
@endif
@endforeach --}}
@endsection
