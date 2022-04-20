
@extends('layouts.app')
@section('content')

@foreach($commandes as $c)
<h1><u> DETAILS OF COMMANDE id:{{$c->id}} </u></h1>
@endforeach

<table class="table table-bordered">
    <thead>
    
      <tr >
        <th scope="col">Product id</th>
        <th scope="col">Product title</th>
        <th scope="col">Product amount</th>
        <th scope="col">Product quantity</th>
        <th scope="col">Product category</th>
        <th scope="col">Product supplier</th>
     
       
        
      </tr>
    </thead>
    <tbody>
    @foreach ( $products_commande as $a)
    @foreach($products as $product)
    @if($product->id ==$a->product_id )
      <tr  @if($loop->odd) class="bg-warning" @endif>
      
        <th scope="row">{{$a->product_id}}</th>
        <th scope="row">{{$product->title}}</th>
        <th scope="row">{{$product->amount}}</th>
        <th scope="row">{{$product->quantity}}</th>
        <th scope="row">{{$product->category->type}}</th>
        <th scope="row">{{$product->supplier->name}}</th>
        

      </tr>
      @endif
      @endforeach
      @endforeach
    </tbody>
  </table>



@endsection