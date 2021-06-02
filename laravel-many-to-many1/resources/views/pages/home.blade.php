@extends('layouts.main_layout')
@section('content')
    <div id="home">
        <div class="container">
            <div class="list_container">
                <h1>Posts</h1>
                <ul class="flex_wrap">
                    @foreach ($posts as $post)
                        <li>
                            <div class="card flex-col">
                                <h3>{{ $post->title }}</h3>
                                <p>{{ $post->text }}</p>
                                <p><i class="fas fa-tag"></i> TAG: {{ $post->tag->name }}</p>
                                <p>• DESCRIPTION: {{ $post->tag->description }}</p>
                                <p><i class="fas fa-info-circle"></i> DETAIL: {{ $post->detail->argument }}</p>
                                <P><i class="far fa-thumbs-up"></i> {{ $post->detail->likes }} LIKES </P>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection
