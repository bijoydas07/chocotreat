<x-backend.layouts.master>
    <x-slot:page_title>
        Product 
    </x-slot>
<div class="card mb-4">
    @if (session('message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> {{session('message')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <div class="card-header" style="background-color: #cca3ff;">
        <a href="{{ route('products.list')}}" class="btn btn-primary">List</a>
        <x-slot:title>
        Product Trash List
        </x-slot>
    </div>
    <div class="card-body" style="font-family: nano;font-weight: lighter;">
        <table id="datatablesSimple" class="table table-striped" style="background-color: #ebdefd;">
            <thead>
                <tr>
                    <th>Serial</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Serial</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </tfoot>
            <tbody>
                @foreach ($trashData as $product)
                <tr>
                    <td>{{ $loop->iteration}}</td>
                    <td>{{ $product->name}}</td>
                    <td>{{ $product->price}}</td>
                    <td><img src="{{asset('storage/products/'.$product->image)}}" alt="" height="120" width="150"></td>
                    <td>
                        <a href="{{route('products.restore', ['product'=>$product->id])}}" class="btn btn-warning btn-sm">Restore</a>
                        <form class="delete-btn d-inline" action="{{ route('products.delete',['product'=>$product->id])}}" method="post">
                            @method('delete')
                            @csrf
                            <button onclick="alert('Are you sure for permanent delete!')" class="btn btn-sm btn-danger" type="submit">Permanently Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</x-backend.layouts.master>