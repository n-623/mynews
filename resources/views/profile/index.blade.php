@extends('layouts.profilefront')

@section('content')
    <div class="container">
        <hr color="#78CDD1">
        @if (!is_null($headline))
            <div class="row">
                <div class="headline col-md-10 mx-auto">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="caption mx-auto">
                                <div class="title p-2">
                                    <h1>{{ str_limit($headline->name, 70) }}</h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <p class="body mx-auto">{{ str_limit($headline->introduction, 250) }}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        <hr color="#78CDD1">
        <div class="row">
            <div class="posts col-md-8 mx-auto mt-3">
                @foreach($posts as $post)
                    <div class="post">
                        <div class="row">
                            <div class="text col-md-6">
                                <div class="date">
                                    {{ $post->updated_at->format('Y年m月d日') }}
                                </div>
                                <div class="name">
                                    {{ str_limit($post->name, 20) }}
                                </div>
                                <div class="gender mt-3">
                                    {{ str_limit($post->gender, 20) }}
                                </div>
                                <div class="hobby mt-3">
                                    {{ str_limit($post->hobby, 30) }}
                                </div>
                                <div class="introduction mt-3">
                                    {{ str_limit($post->introduction, 250) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr color="#78CDD1">
                @endforeach
            </div>
        </div>
    </div>
@endsection