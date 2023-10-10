@extends('dashboard.layouts.master')
@section('content')
    <div class="container-fluid">
                <div class="row">
                    <h2>Discounts</h2>
                </div>
                <div class="row">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Discount Name</th>
                                <th scope="col">value</th> 
                                <th scope="col">status</th>
                            </tr>
                        </thead>

                        <tbody>
                    @foreach ( $data as $item )
                    <tr>
                    <td>{{ $item->discount_name }}</td>
                    <td>{{ $item->value }}</td> 
                    <td>{{ $item->status }}</td>   
                    <td>
                    <a href="{{ url('/discount/' . $item->id  . '/edit' ) }}" > <button class="btn btn-warning btn-sm">Edit</button></a>
                    
                    <form method="POST" action="{{ url('/discount' . '/' . $item->id  ) }}" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Confirm Delete?')">Delete</button>
                    </form>
                </td>
                </tr>
                @endforeach
                </tbody>
                </table>
                <center>
                <div class="col-lg-2">
                <a href="{{ url('/discount/create') }}" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2"><i class="ti ti-plus"></i> Add New Admin</a>
                </div>
                </center>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection