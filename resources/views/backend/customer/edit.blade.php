<x-backend.layouts.master>
    <x-slot:page_title>
        Customer 
    </x-slot>
<div class="card mb-4">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="card-header" style="background-color: #cca3ff;">
        <a href="{{ route('customers.list')}}" class="btn btn-primary">List</a>
        <x-slot:title>
        Customer Update
        </x-slot>
    </div>
    <div class="card-body" style="background-color: #ebdefd;">
        <form action="{{ route('customers.update', ['customer'=>$customer->id])}}) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('patch')
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" id="name" value="{{old('name', $customer->name)}}" aria-describedby="name">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
</x-backend.layouts.master>