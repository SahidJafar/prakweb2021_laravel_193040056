@extends('layouts.main')

@section('container')
<h1 class="mb-5">{{ $tittle }}</h1>
   @foreach($posts as $post)
   <article class="mb-5 border-bottom pb-4">
   <h2>
    <a href="/posts/{{ $post->slug }} " class="text-decoration-none">{{ $post->title  }}</h2></a>
    <p>By. <a href="/authors/{{ $post->author->username }}" 
    class="text-decoration-none">{{ $post->author->name }} </a> in
    <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name  }}</a></p>
    <p>{{$post->excerpt}}</p>

    <a href="/posts/{{ $post->slug }}" >Read more..</a>
   </article>
   @endforeach
@endsection

