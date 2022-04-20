@extends('layouts.app')

@section('content')
<div class="mt-3">
<h2>Details of products </h2>    
</div>
<table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">title</th>
        <th scope="col">Amount</th>
        <th scope="col">Quantity</th>
        <th scope="col">Category</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($category_products as $product)
      <tr>
        <th scope="row">{{$product->id}}</th>
        <td>{{$product->title}}</td>
        <td>{{$product->amount}}</td>
        <td>{{$product->quantity}}</td>
        <td>{{$product->category->nameCategory}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>

@endsection