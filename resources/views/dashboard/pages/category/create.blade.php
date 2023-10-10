@extends('dashboard.layouts.master')
@section('content')
<div class="container-fluid">
                <div class="row">
                    <div class="col-lg-10">
                        <h3>Add Category</h3>
                        <br>
                        <br>
                        <form action="{{ url('/category') }}" method="POST" enctype="multipart/form-data">
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