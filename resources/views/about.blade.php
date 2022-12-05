@extends('layouts.main')

@section('container')
<h3> {{ $nama }} </h3>
<p> {{ $email }} </p>
<img src="img/{{ $img }}" alt=" {{ $nama }} " width="200">
@endsection
