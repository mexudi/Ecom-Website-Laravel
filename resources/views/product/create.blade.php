@extends('layouts.app')

@section('content')
<div class="mt-3">
    <h2>Create new product</h2>
</div>

<div class="mt-3 card">
    <div class="card-body">
        <form method="POST" action="{{ url('/products/store') }}">
            @csrf
            @include('product.form')
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
</div>


@endsection