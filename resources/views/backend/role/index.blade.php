<x-backend.layouts.master>
    <x-slot:page_title>
        Roles
    </x-slot>
<div class="card mb-4">

    @if (session('message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> {{session('message')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <div class="card-header" style="background-color: #cca3ff;">
        <a href="{{route('home')}}" class="btn btn-primary btn-sm">Home</a>
        <x-slot:title>
        Role List
        </x-slot>
    </div>

    <form class="search d-flex align-items-center" action="" method="get" style="margin-top: 30px;margin-left:16px margin-bottom: 10px;">
        @csrf
        <input type="search" name="keyword" id="" style="margin-left: 16px;">
        <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-search"></i></button>
    </form>

    <div class="card-body" style="font-family: nano;font-weight: lighter;">
        <table class="table table-striped" style="background-color: #ebdefd;">
            <thead>
                <tr>
                    <th>Serial</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($roles as $role)
                <tr>
                    <td>{{ $roles->firstItem()+$loop->index}}</td>
                    <td>{{ $role->name}}</td>
                    {{-- <td>{{ $role->users->name}}</td> --}}
                    <td>
                        <a href="{{ route('role.user-list', ['role'=>$role->id])}}" class="btn btn-success btn-sm"><i class="fa-solid fa-eye"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $roles->links() }}
    </div>

</div>
</x-backend.layouts.master>