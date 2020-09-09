<a class="btn btn-success" href="{{ route('address.create') }}"> Create New Address</a>
@section('content')


    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add the addresses</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('address.create') }}"> Create New Address</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>User_id</th>
            <th>Address1</th>
            <th>Address1</th>
            <th>Address2</th>
            <th>City</th>
            <th>State</th>
            <th>Country</th>
            <th>Zip</th>
            <th width="280px">Action</th>
        </tr>
        {{-- {{dd($addresses)}} --}}
        @foreach ($addresses as $address)
        
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $product->address1 }}</td>
            <td>{{ $product->address2 }}</td>
            <td>{{ $product->city }}</td>
            <td>{{ $product->state }}</td>
            <td>{{ $product->country }}</td>
            <td>{{ $product->zip }}</td>
            <td>
                <form action="{{ route('addresses.destroy',$address->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('addreses.show',$address->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('adresses.edit',$address->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $addresses->links() !!}
      
@endsection