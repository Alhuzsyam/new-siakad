

@extends('layouts.main')

@section('container')
<h1>Blog|Page</h1>
@foreach ($posts as $post)
    <h1>{{ $post['Title'] }}</h1>
    <p>{{ $post['contain'] }}</p>
@endforeach
@endsection
