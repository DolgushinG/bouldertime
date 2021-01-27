@extends('layout')

@section('content')

@include('posts.outpost')
<div class="site-section posts-style">
    <div class="container">
<p>{{$posts->onEachSide(5)->links()}}</p>
    </div>
</div>
@endsection
