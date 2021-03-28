@extends('layouts.app')

@section('content')


@for()
    {{ user->nombre }}
@endfor

@if(1 > 2)
    <div>Samantha</div>
@else
    <div>Sanina</div>
@endif


@endsection