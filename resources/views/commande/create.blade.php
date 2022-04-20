@extends('layouts.app')
@section('content')




<form method="POST" action="{{ url('/commande/store') }}">
    @csrf
    @foreach($products as $product)
    <div class="form-check">
        <input type="checkbox" class="form-check-input" name="product[]" value="{{$product->id}}">
        <label class="form-check-label" for="exampleCheck1">{{$product->title}}</label>
    </div>
    @endforeach
    <button type="submit" class="btn btn-primary mt-3">Save</button>
</form>









@endsection