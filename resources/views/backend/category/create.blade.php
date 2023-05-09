<x-backend.layouts.master>
    <x-slot:page_title>
        Category 
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
    <div class="card-header" style="background-color: #cca3ff;;">
        <a href="{{ route('categories.list')}}" class="btn btn-primary">List</a>
        <x-slot:title>
        Category Create
        </x-slot>
    </div>
    <div class="card-body" style="background-color: #ebdefd;">
        <form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title<span style="color: red">*</span></label>
                <input type="text" class="form-control" name="title" id="title" value="{{old('title')}}" aria-describedby="title">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description<span style="color: red">*</span></label>
                <textarea name="description" id="description" cols="30" rows="5" class="form-control">{{old('description')}}</textarea>
            </div>
            {{-- <div class="mb-3">
                <label for="file" style="margin-bottom: 8px;">Image</label>
                <input type="file" class="form-control" name="image" id="file">
            </div> --}}
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
</div>
</x-backend.layouts.master>