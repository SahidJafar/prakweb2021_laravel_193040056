@extends('layouts.main')

@section('container')
<article>
<h2>{{ $post->title }}</h2>

<p>By. Sahid Jafar in <a href="/categories/{{$post->category->slug }}">{{ $post->category->name  }}</a></p>

<h5>{!! $post->body !!}</h5>
</article>

<a href="/blog">Back to Posts</a>
@endsection