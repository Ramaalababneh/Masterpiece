@extends('dashboard.layouts.master')
@section('content')
<div class="container-fluid">
                <div class="row">
                    <div class="col-lg-10">
                        <h3>Add Discount</h3>
                        <br>
                        <br>
                        <form action="{{ url('/discount') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label>Name :</label>
                                <input type="text" class="form-control" id="discount_name" name="discount_name">
                                <span>@error('discount_name'){{$message}} @enderror</span><br><br>
                            </div>

                            <div class="mb-3">
                                <label>value</label><br>
                                <input type="text" name="value" id="value" class="form-control">
                                <span>@error('value'){{$message}} @enderror</span><br><br>
                            </div>

                            <div class="mb-3">
                            <label for="status">Discount Status:</label>
                            <select class="form-control" id="status" name="status" required>
                                <option value="1">Valid</option>
                                <option value="0">Invalid</option>
                            </select>
                            </div>


                            {{-- <div class="mb-3">
                            <label for="status">Discount Status :</label>
                            <select id="status" name="status" required>
                                <option value="valid">Valid</option>
                                <option value="invalid">Invalid</option>
                            </select>
                            </div> --}}

                            <button type="submit" value="Save" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection