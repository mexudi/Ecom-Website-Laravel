@extends('layouts.app')

@section('content')
<div class="mt-3">
<h2>List of categories</h2>
<a href="{{url('/categories/create')}}" type="button" class="mb-2 btn btn-info float-end">Add new category</a>    
</div>

@if(session()->has('status'))
  <div class="alert alert-success" role="alert" style="width: 30%;">
    {{session()->get('status')}}
  </div>
@endif
<table class="table table-bordered">
    <thead>
      <tr style="text-align: center;">
        <th scope="col" style="width: 5%;">#</th>
        <th scope="col" >Name Of Category</th>
        <th scope="col" style="width: 15%;">Actions</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($categories as $category)
      <tr>
        <th scope="row" style="text-align: center;">{{$category->id}}</th>
        <td>{{$category->nameCategory}}</td>
        <td>
            <div class="btn-group" role="group" aria-label="Basic example">
                <a href="{{url('/categories/'.$category->id.'/edit')}}" type="button" class="btn btn-primary">Edit</a>
                <a href="{{url('/categories/'.$category->id)}}" type="button" class="btn btn-warning">Show</a>
                <form method="POST" action="{{url('/categories/'.$category->id)}}">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger">Delete</button>
                </form>
              </div>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
{{$categories->links()}}
@endsection