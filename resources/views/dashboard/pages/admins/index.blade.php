@extends('dashboard.layouts.master')
@section('content')
    <div class="container-fluid">
                <div class="row">
                    <h2>Admins</h2>
                </div>
                <div class="row">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Image</th>        
                                <th scope="col">Action</th>                                
                            </tr>
                        </thead>
                        <tbody>
                    @foreach ( $data as $item )
                    <tr>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->email }}</td>
                    <td>
                    @if ($item->image)
                    <img src="{{ $item->image }}" alt="Image" width="100" height="100">
                    @else
                    No Image
                    @endif
                    </td>
                    <td>
                    <a href="{{ url('/admin/' . $item->id  . '/edit' ) }}" > <button class="btn btn-warning btn-sm">Edit</button></a>
                    
                    <form method="POST" action="{{ url('/admin' . '/' . $item->id  ) }}" style="display: inline;">
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
                <a href="{{ url('/admin/create') }}" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2"><i class="ti ti-plus"></i> Add New Admin</a>
                </div>
                </center>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection