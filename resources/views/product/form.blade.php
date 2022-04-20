<div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input value="{{old('title',$product->title ?? null)}}" type="text" class="form-control" name="title" id="title">
    @error('title') <span class="text-danger">{{ $message }}</span> @enderror
</div>
<div class="mb-3">
    <label for="amount" class="form-label">Amount</label>
    <input value="{{old('amount',$product->amount ?? null)}}" type="text" class="form-control" name="amount" id="amount">
    @error('amount') <span class="text-danger">{{ $message }}</span> @enderror
</div>
<div class="mb-3">
    <label for="quantity" class="form-label">Quantity</label>
    <input value="{{old('quantity',$product->quantity ?? null)}}" type="text" class="form-control" name="quantity" id="quantity">
    @error('quantity') <span class="text-danger">{{ $message }}</span> @enderror
</div>
<div class="mb-3">
    <label for="category" class="form-label">Category</label>
      <select class="form-control" name="category_id" id="category">
        @foreach($categories as $category)
        <option value="{{$category->id}}">{{$category->nameCategory}}</option>
        @endforeach
      </select>
</div>