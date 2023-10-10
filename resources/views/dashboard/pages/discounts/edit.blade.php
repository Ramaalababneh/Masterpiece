@extends('dashboard.layouts.master')
@section('content')
<div class="container-fluid">
                <div class="row">
                    <div class="col-lg-10">
                        <h3>Add Discount</h3>
                        <br>
                        <br>
                        <form action="{{ url('/discount' ,$data->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method("PATCH")
                            <input type="hidden" name="id" value="{{ $data->id }}" id="id">

                            <div class="mb-3">
                                <label>Name :</label>
                                <input type="text" class="form-control" value="{{ $data->discount_name}}"  id="discount_name" name="discount_name">                
                            </div>

                            <div class="mb-3">
                                <label>Value :</label><br>
                                <input type="text" name="value" value="{{ $data->value}}" id="value" class="form-control">
                            </div>

                            <div class="mb-3">
                            <label for="status">Discount Status :</label>
                            <select id="status" name="status" required>
                                <option value="1">Valid</option>
                                <option value="0">Invalid</option>
                            </select>
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