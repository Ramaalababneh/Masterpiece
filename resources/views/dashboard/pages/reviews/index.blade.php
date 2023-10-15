@extends('dashboard.layouts.master')
@section('content')
    <div class="container-fluid">
                <div class="row">
                    <h2>Reviews</h2>
                </div>
                <div class="row">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Review</th>
                                <th scope="col">Rating</th>
                                <th scope="col">User ID</th> 
                                <th scope="col">Order ID</th> 
                                <th scope="col">Action</th>                               
                            </tr>
                        </thead>

                    <tbody>
                    @foreach ( $data as $item )
                    <tr>
                    <td>{{ $item->review_txt }}</td>                    
                    <td>{{ $item->rating }}</td>
                    <td>{{ $item->user_id }}</td>
                    <td>{{ $item->order_id }}</td>
                    <td>
    
                    <form method="POST" action="{{ url('/review' . '/' . $item->id  ) }}" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Confirm Delete?')">Delete</button>
                    </form>
                </td>
                </tr>
                @endforeach
                </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
@endsection