@extends('layouts.main')
@section('content')

    <div>
        <div>
            <a href="{{ route('post.create') }}" class="btn btn-primary mb-3">Add one</a>
        </div>

        @foreach($posts as $post)
            {{--<div>{{ $post->id  }} . {{ $post->title  }}</div>--}}
            <div>
                <a href="{{ route('post.show',$post->id) }}"> {{ $post->id  }} . {{ $post->title  }}</a>
            </div>
        @endforeach

        <div class="mt-3">
{{--            {{ $posts-> links()}}--}}

{{--            FOR pagination after filter--}}
            {{$posts->withQueryString()->links()}}
        </div>
    </div>

@endsection
