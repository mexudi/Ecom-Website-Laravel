@extends('layouts.app')
@section('content')



<a href="{{url('/commande/create')}}" type="button" class="mb-2 btn btn-success float-end">Add New Commande</a>    
</div>

<h1>List Of Commandes  :</h1>
@if(session()->has('status'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>{{session()->get('status')}}.</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
@endif

<table class="table table-bordered">
    <thead>
    
      <tr>
        <th scope="col">#</th>
        <th scope="col" style="text-align:center ;width:3%" >Status</th>
        <th scope="col" style="text-align:center; width:50%" >Reference</th>
        <th scope="col" style="text-align:center ; width:20%">Action</th>
      </tr>
    </thead>
    @foreach($commandes as $commande)
    <tr>
        <th scope="row">{{$commande->id}}</th>
        <td>{{$commande->status}}</td>
        <td>{{$commande->reference}}</td>
        <td>
          
        <div class="btn-group" role="group" aria-label="Basic example">
               
                <a href="{{url('/commande/'.$commande->id.'/show')}}"><button type="button" class="btn btn-warning">Details</button></a>
                <form method="POST" action="{{ url('/commande/'.$commande->id) }}" >
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
                </form>
                
              </div>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>



@endsection