<x-backend.layouts.master>
    <x-slot:page_title>
        Users 
    </x-slot>
<div class="card mb-4">
    @if (session('message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> {{session('message')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <div class="card-header" style="background-color: #cca3ff;">
        <a href="{{ route('users.role')}}" class="btn btn-primary btn-sm">List</a>
        <x-slot:title>
        User List
        </x-slot>
    </div>
    <form class="search d-flex align-items-center" action="" method="get" style="margin-top: 30px;
margin-left: 16px; margin-bottom: 10px;">
        @csrf
        <input type="search" name="keyword" id="">
        <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-search"></i></button>
    </form>
    <div class="card-body" style="font-family: nano;font-weight: lighter;">
        <table class="table table-striped" style="background-color: #ebdefd;">
            <thead>
                <tr>
                    <th>Serial</th>
                    <th>Name</th>
                    <th>Role</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    {{-- <td>{{ $users->firstItem()+$loop->index}}</td> --}}
                    <td>{{$loop->index + 1}}</td>
                    <td>{{ $user->name}}</td>
                    <td>{{ $user->role->name}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{-- {{ $users->links() }} --}}
    </div>
</div>
</x-backend.layouts.master>