@extends('layouts.main')

@section('container')

<h1>Welcome {{ $name }}</h1>
<img src="{{ asset('/img/'.$image) }}" alt="{{ $name }}" width="200" class="img-thumbnail rounded-circle">
<p>Email : {{ $email }}</p>

@endsection