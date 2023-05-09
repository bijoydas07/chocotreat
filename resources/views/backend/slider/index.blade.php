<x-backend.layouts.master>
    <x-slot:page_title>
        Slider
    </x-slot>
<div class="card mb-4">
    @if (session('message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> {{session('message')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <div class="card-header" style="background-color: #cca3ff;">
        <a href="{{route('sliders.create')}}" class="btn btn-primary btn-sm">Add Slider</a>
        <x-slot:title>
        Slider List
        </x-slot>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body" style="background-color: #edeaff;">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Ser</th>
                                    <th>Heading</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th>Edit</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($sliders as $item)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$item->heading}}</td>
                                    <td>
                                        <img src="{{asset('public/storage/slider/'.$item->image)}}" width="100px" alt="Slider Image" srcset="">
                                    </td>
                                    <td>{{$item->status}}

                                        @if ($item->status == '1')
                                            {{-- hidden --}}
                                        @else
                                            {{-- visible     --}}
                                        @endif

                                    </td>
                                    <td>
                                        <a href="{{ route('sliders.edit',['slider'=>$item->id])}}" class="btn btn-success btn-sm">Edit</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody> 
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>

</x-backend.layouts.master>