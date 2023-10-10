@extends('dashboard.layouts.master')
@section('content')
<div class="container-fluid">
                <div class="row">
                    <div class="col-lg-10">
                        <h3>Add Category</h3>
                        <br>
                        <br>
                        <form action="{{ url('/category' ,$data->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method("PATCH")
                            <input type="hidden" name="id" value="{{ $data->id }}" id="id">

                            <div class="mb-3">
                                <label>Name :</label>
                                <input type="text" class="form-control" value="{{ $data->name}}"  id="name" name="name">                
                            </div>

                            <div class="mb-3">
                                <label>description</label><br>
                                <input type="text" name="description" value="{{ $data->description}}" id="description" class="form-control">
                            </div>

                            <div class="mb-3">
                            <label for="image">Upload Image:</label>
                            @if ($data->image)
                            <img src="{{ asset('assets/img/' . $data->image) }}" alt="Existing Image" width="100" height="100"><br>
                            @endif
                            <input type="file" name="image" id="image" accept="image/*" class="form-control"><br>
                            
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