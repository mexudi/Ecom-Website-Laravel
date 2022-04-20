@extends('layouts.app')

@section('content')
<div class="mt-3">
    <h2>Edit : {{$product->title}}</h2>
</div>
<form method="POST" action="{{route('posts.destroy', '$post->id') }}"  >
@method('DELETE')
@csrf
<button type="submit"> Delete blog</button>
</form>