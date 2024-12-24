<div class="card-body">
  <div class="row">
    <!-- Ctaegory -->
    <div class="form-group col-md-6 col-12 mb-3">
      <label for="name">Select Category</label>
      <select name="category_id" class="form-control">
        <option value="" selected disabled>Select Category</option>
        @foreach($categories as $category)
        <option value="{{$category->id}}" {{old('category_id', @$subcategory->category_id) == $category->id ? 'selected' : '' }}>{{$category->name}}</option>
        @endforeach
      </select>      
    </div>
    <!-- Name -->
    <div class="form-group col-md-6 col-12 mb-3">
      <label for="name">Subcategory Name</label>
      <input type="text" name="name" value="{{old('name') ?? (@$subcategory->name ?? '')}}" class="form-control @error('name') is-invalid @enderror" placeholder="Enter Subcategory Name">
      @error('name')
      <div class="text-danger">{{ $message }}</div>
      @enderror
    </div>
  </div>
</div>

<div class="card-footer d-flex justify-content-center">
  <button type="submit" class="btn btn-info">Save</button>
  <a href="{{ route('admin.subcategory.index') }}" class="btn btn-secondary ms-3">Cancel</a>
</div>