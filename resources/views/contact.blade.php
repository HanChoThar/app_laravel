@extends('layout')

@section('content')

@foreach ($posts as $post)
    <h2>{{$post}}</h2>
@endforeach
@endsection