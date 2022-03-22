@extends('layouts.master')

@section('content')
    
    
@foreach ($posts as $post)
    
    <div class="card" style="width: 64rem;">
        <div class="card-body">
            <h5 class="card-title">{{ $post->title }}</h5>
            <p style="font-weight: bold;">
                @foreach ($post->tags as $tag)
                    - {{ $tag->name }} -
                @endforeach
            </p>
            <p class="card-text">{{ $post->content }}</p>
            <a href="{{ route('blog.post', ['id'=> $post->id]) }}" class="btn btn-primary">Ver más</a>
        </div>
    </div>
@endforeach
    <div class="row">
        <div class="col-md-12 text-center">
            {{ $posts->links() }}
        </div>
    </div>
@endsection
