@extends('layouts.app')

@section('content')
<div class="mt-3">
    <h2>Create new Category</h2>
</div>

<div class="mt-3 card">
    <div class="card-body">
        <form method="POST" action="{{ url('/categories/store') }}">
            @csrf
            <div class="mb-3">
                <label for="nameCategory" class="form-label">Name Of Category</label>
                <input value="{{old('nameCategory')}}" type="text" class="form-control" name="nameCategory" id="nameCategory">
                @error('nameCategory'){{$message}}@enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>


@endsection