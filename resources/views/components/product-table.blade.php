
{{$message}}
<div>
<table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">title</th>
        <th scope="col">Amount</th>
        <th scope="col">Quantity</th>
        <th scope="col">Category</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($products as $product)
      <tr>
        <th scope="row">{{$product->id}}</th>
        <td>{{$product->title}}</td>
        <td>{{$product->amount}}</td>
        <td>{{$product->quantity}}</td>
        <td>{{$product->category->nameCategory}}</td>
        <td>
            <div class="btn-group" role="group" aria-label="Basic example">
                <a href="{{url('/products/'.$product->id.'/edit')}}" type="button" class="btn btn-primary">Edit</a>
                <form method="POST" action="{{url('/products/'.$product->id)}}">
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
</div>