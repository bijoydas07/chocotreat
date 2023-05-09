<x-backend.layouts.master>
    <x-slot:page_title>
        Customer
    </x-slot>
<div class="card mb-4">
    @if (session('message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> {{session('message')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <div class="card-header" style="background-color: #cca3ff;">
        <a href="{{ route('customers.create')}}" class="btn btn-primary">Create</a>
        <x-slot:title>
        Customer List
        </x-slot>
    </div>
    <div class="card-body" style="font-family: nano;font-weight: lighter;">
        <table id="datatablesSimple" class="table table-striped" style="background-color: #ebdefd;">
            <thead>
                <tr>
                    <th>Serial</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Serial</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
            </tfoot>
            <tbody>
                @foreach ($customers as $customer)
                <tr>
                    <td>{{ $loop->iteration}}</td>
                    <td>{{ $customer->name}}</td>
                    <td>
                        <a href="{{route('customers.show', ['customer'=>$customer->id])}}" class="btn btn-primary btn-sm">Show</a>
                        <a href="{{route('customers.edit', ['customer'=>$customer->id])}}" class="btn btn-success btn-sm">Edit</a>
                        <form class="delete-btn d-inline" action=" {{ route('customers.destroy',['customer'=>$customer->id])}}" method="post">
                            @method('delete')
                            @csrf
                            <button onclick="alert('Are you sure!')" class="btn btn-sm btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</x-backend.layouts.master>