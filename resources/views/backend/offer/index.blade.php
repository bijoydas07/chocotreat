<x-backend.layouts.master>
    <x-slot:page_title>
        Offer
    </x-slot>
<div class="card mb-4">
    @if (session('message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> {{session('message')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <div class="card-header" style="background-color: #cca3ff;">
        <a href="{{ route('products.create')}}" class="btn btn-primary btn-sm">Create</a>
        <x-slot:title>
        Offer List
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
                @foreach ($products as $product)
                <tr>
                    <td>{{ $loop->iteration}}</td>
                    <td>{{ $product->name}}</td>
                    <td>{{ $product->price}}</td>
                    <td><img src="{{asset('storage/products/'.$product->image)}}" alt="" height="120" width="150"></td>
                    <td>
                        <a href="{{route('products.show', ['product'=>$product->id])}}" class="btn btn-primary "><i class="fa-solid fa-eye"></i></a>
                        <a href="{{route('products.edit', ['product'=>$product->id])}}" class="btn btn-success "><i class="fa-solid fa-pen-to-square"></i></a>
                        <form class="delete-btn d-inline" action="{{ route('products.destroy',['product'=>$product->id])}}" method="post">
                            @method('delete')
                            @csrf
                            <button onclick="alert('Are you sure!')" class="btn btn-danger" type="submit"><i class="fa-solid fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</x-backend.layouts.master>