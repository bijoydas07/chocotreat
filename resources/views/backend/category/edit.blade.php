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
    <div class="card-header" style="background-color: #cca3ff;">
        <a href="{{ route('categories.list')}}" class="btn btn-primary">List</a>
        <x-slot:title>
        Category Update
        </x-slot>
    </div>
    <div class="card-body" style="background-color: #ebdefd;">
        <form action="{{ route('categories.update', ['category'=>$category->id])}}) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('patch')
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" name="title" id="title" value="{{old('title', $category->title)}}" aria-describedby="title">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" id="description" cols="30" rows="5" class="form-control">{{old('description',$category->description)}}</textarea>
            </div>
            {{-- <div class="mb-3">
                <label for="file">Image:</label>
                <input type="file" class="form-control" name="image" id="file">
            </div> --}}
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
</x-backend.layouts.master>