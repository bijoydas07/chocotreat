<x-backend.layouts.master>
    <x-slot:page_title>
        Category 
    </x-slot>
<div class="card mb-4">
    @if (session('message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> {{session('message')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <div class="card-header" style="background-color: #cca3ff;">
        @can('create-category')
            <a href="{{ route('categories.create')}}" class="btn btn-primary btn-sm">Create</a>
        @endcan
        <a href="{{ route('categories.pdf')}}" class="btn btn-danger btn-sm">PDF</a>
        <a href="{{ route('categories.excel')}}" class="btn btn-success btn-sm">Excel</a> <hr>
        
        <form class="import_excel d-flex align-items-baseline" action="{{ route('categories.import')}}" method="post" enctype="multipart/form-data">
            @csrf
                <label for="formFileSm" class="form-label">File :</label>
                <input class="form-control form-control-sm" id="formFileSm" name="file" type="file" style="width: 20%; background-color: #cca3ff;border: 1px solid black; margin-left: 4px;">
                <button type="submit" class="btn btn-success btn-sm" style="margin-left: 5px;">Import</button>
        </form>
        <x-slot:title>
        Category List
        </x-slot>
    </div>
    <form class="search d-flex align-items-center" action="" method="get" style="margin-top: 30px;
margin-left: 16px; margin-bottom: 10px;">
        @csrf
        <input type="search" name="keyword" id="">
        <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-search"></i></button>
    </form>
    <div class="card-body" style="font-family: nano;font-weight: lighter;">
        {{-- <table id="datatablesSimple" class="table table-striped" style="background-color: #ebdefd;"> --}}
        <table class="table table-striped" style="background-color: #ebdefd;">
            <thead>
                <tr>
                    <th>Serial</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Serial</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </tfoot>
            <tbody>
                @foreach ($categories as $category)
                <tr>
                    <td>{{ $categories->firstItem()+$loop->index}}</td>
                    <td>{{ $category->title}}</td>
                    {{-- <td>{{ $category->description}}</td> --}}
                    <td><?=substr("$category->description",0,40).'...see more'?></td>
                    <td>
                        <a href="{{route('category.product-list',['category'=>$category->id])}}" class="btn btn-primary"><i class="fa-solid fa-eye"></i></a>
                        <a href="{{route('categories.edit', ['category'=>$category->id])}}" class="btn btn-success"><i class="fa-solid fa-pen-to-square"></i></a>
                        <form class="delete-btn d-inline" action=" {{ route('categories.destroy',['category'=>$category->id])}}" method="post">
                            @method('delete')
                            @csrf
                            <button onclick="alert('Are you sure!')" class="btn btn-danger" type="submit"><i class="fa-solid fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $categories->links() }}
    </div>
</div>
</x-backend.layouts.master>