@extends('dashboard.layouts.master')
@section('content')
<div class="container-fluid">
                <div class="row">
                    <div class="col-lg-10">
                        <h3>Orders</h3>
                        <br>
                        <br>
                        <form action="{{ url('/order' , $data->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method("PATCH")
                            <input type="hidden" name="id" value="{{ $data->id }}" id="id">

                            <div class="mb-3">
                                <label>Order Date :</label>
                                <input type="date" class="form-control" value="{{ $data->order_date}}"  id="order_date" name="order_date">                
                            </div>

                            <div class="mb-3">
                                <label>Total Amount :</label><br>
                                <input type="text" name="total_amount" value="{{ $data->total_amount}}" id="total_amount" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="price">User ID :</label>
                                <input type="" name="user_id" value="{{ $data->user_id }}" id="user_id" class="form-control">
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