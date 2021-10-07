@extends('layouts.main')

@section('container')
<article>
<h2>{{ $post["tittle"] }}</h2>
<h5>{{ $post["author"] }}</h5>
<h5>{{ $post["body"] }}</h5>
</article>

<a href="/blog">Back to Posts</a>
@endsection