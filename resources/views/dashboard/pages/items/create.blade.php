@extends('dashboard.layouts.master')
@section('content')
<div class="container-fluid">
                <div class="row">
                    <div class="col-lg-10">
                        <h3>Add Item</h3>
                        <br>
                        <br>
                        <form action="{{ url('/item') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label>Name :</label>
                                <input type="text" class="form-control" id="name" name="name">
                                <span>@error('name'){{$message}} @enderror</span><br><br>
                            </div>

                            <div class="mb-3">
                                <label>description</label><br>
                                <input type="text" name="description" id="description" class="form-control">
                                <span>@error('description'){{$message}} @enderror</span><br><br>
                            </div>

                            <div class="mb-3">
                                <label>Price</label><br>
                                <input type="double" name="price" id="price" class="form-control">
                                <span>@error('price'){{$message}} @enderror</span><br><br>
                            </div>

                            <div class="mb-3">
                                <label>Stock Quantity</label><br>
                                <input type="text" name="stock_quantity" id="stock_quantity" class="form-control">
                                <span>@error('stock_quantity'){{$message}} @enderror</span><br><br>
                            </div>

                            <div class="mb-3">
                                <label>Size</label><br>
                                <input type="text" name="size" id="size" class="form-control">
                                <span>@error('size'){{$message}} @enderror</span><br><br>
                            </div>

                            <div class="mb-3">
                                <label>Category ID</label><br>
                                <input type="text" name="category_id" id="category_id" class="form-control">
                                <span>@error('category_id'){{$message}} @enderror</span><br><br>
                            </div>

                            <div class="mb-3">
                                <label for="image">Upload Image:</label>
                                <input type="file" id="image" name="image" accept="image/*" ><br>
                                <span>@error('image'){{$message}} @enderror</span><br><br>
                            </div>
                            <button type="submit" value="Save" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection