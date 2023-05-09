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
        Customer Create
        </x-slot>
    </div>
    <div class="card-body" style="background-color: #ebdefd;">
        <form action="{{ route('customers.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name<span style="color: red">*</span></label>
                <input type="text" class="form-control" name="name" id="name" value="{{old('name')}}" aria-describedby="name">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
</x-backend.layouts.master>