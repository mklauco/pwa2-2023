@extends('layouts.app')

@section('content')

<h1> Second View {{$parameter ?? 'N/a'}}</h1>

@for($i = 0; $i <= 5; $i++)
@include('text_include')
<br>
@endfor

@endsection