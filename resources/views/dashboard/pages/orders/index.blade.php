@extends('dashboard.layouts.master')
@section('content')
    <div class="container-fluid">
                <div class="row">
                    <h2>Orders</h2>
                </div>
                <div class="row">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Order Date</th>
                                <th scope="col">Total Amount</th>
                                <th scope="col">User ID</th> 
                                <th scope="col">Action</th>                               
                            </tr>
                        </thead>

                        <tbody>
                    @foreach ( $data as $item )
                    <tr>
                    <td>{{ $item->order_date }}</td>                    
                    <td>{{ $item->total_amount }}</td>
                    <td>{{ $item->user_id }}</td>
                    <td>
                    <a href="{{ url('/order/' . $item->id  . '/edit' ) }}" > <button class="btn btn-warning btn-sm">Edit</button></a>
                    
                    <form method="POST" action="{{ url('/order' . '/' . $item->id  ) }}" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Confirm Delete?')">Delete</button>
                    </form>
                </td>
                </tr>
                @endforeach
                </tbody>
                </table>
                {{-- <center>
                <div class="col-lg-2">
                <a href="{{ url('/item/create') }}" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2"><i class="ti ti-plus"></i> Add New Admin</a>
                </div>
                </center>
                </div> --}}
            </div>
        </div>
    </div>
</body>
@endsection