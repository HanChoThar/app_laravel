@extends('layout')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
          @foreach ($posts as $post)
          <div>
            <h5 class="card-title">{{ $post->name }}</h5>
            <p class="card-text">{{ $post->description }}</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>              
          </div><br>
          @endforeach
        </div>
      </div>
</div>
@endsection