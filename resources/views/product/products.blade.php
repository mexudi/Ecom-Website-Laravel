@extends('layouts.app')

@section('content')
<div class="mt-3">
<h2>List of products</h2>
<a href="{{url('/products/create')}}" type="button" class="mb-2 btn btn-info float-end">Add new product</a>    
</div>

@if(session()->has('status'))
  <div class="alert alert-success" role="alert" style="width: 30%;">
    {{session()->get('status')}}
  </div>
@endif
<x-product-table message="success"></x-product-table>


@endsection