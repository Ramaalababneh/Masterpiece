@extends('dashboard.layouts.master')
@section('content')
<div class="container-fluid">
                <div class="row">
                    <div class="col-lg-10">
                        <h3>Edit User</h3>
                        <br>
                        <br>
                        <form action="{{ url('/user' , $data->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method("PATCH")
                            <input type="hidden" name="id" value="{{ $data->id }}" id="id">

                            <div class="mb-3">
                                <label>Name :</label>
                                <input type="text" class="form-control" value="{{ $data->name}}"  id="name" name="name">                
                            </div>

                            <div class="mb-3">
                                <label for="email">Email</label>
                                <input type="text" name="email" value="{{ $data->email }}" id="email" class="form-control">
                            </div>

                            {{-- <div class="mb-3">
                                <label for="password">Password</label>
                                <input type="password" name="password" value="{{ $data->password }}" id="password" class="form-control">
                            </div> --}}

                            <div class="mb-3">
                                <label for="mobileNum">Mobile Number</label>
                                <input type="mobileNum" name="mobileNum" value="{{ $data->mobileNum }}" id="mobileNum" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="location">Location</label>
                                <input type="text" name="location" value="{{ $data->location }}" id="location" class="form-control">
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