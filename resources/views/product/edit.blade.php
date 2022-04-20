@extends('layouts.app')

@section('content')
<div class="mt-3">
    <h2>Edit : {{$product->title}}</h2>
</div>

<div class="mt-3 card">
    <div class="card-body">
        <form method="POST" action="{{ url('/products/'.$product->id.'/update') }}">
            @csrf
            @method("PUT")
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input value="{{old('title',$product->title)}}" type="text" class="form-control" name="title" id="title">
                @error('title'){{$message}}@enderror
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input value="{{old('title',$product->price)}}" type="text" class="form-control" name="price" id="price">
                @error('price'){{$message}}@enderror
            </div>
            <div class="mb-3">
                <label for="quantity" class="form-label">Quantity</label>
                <input value="{{old('title',$product->quantity)}}" type="text" class="form-control" name="quantity" id="quantity">
                @error('quantity'){{$message}}@enderror
            </div>
            <div class="mb-3">
                <label for="category" class="form-label">Category</label>
                <input value="{{old('title',$product->category->nameCategory)}}" type="text" class="form-control" name="quantity" id="quantity">
                @error('category->nameCategory'){{$message}}@enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>


@endsection