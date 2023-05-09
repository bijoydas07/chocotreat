<x-backend.layouts.master>
    <x-slot:page_title>
        Slider Edit
    </x-slot>
<div class="card mb-4">
    @if (session('message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> {{session('message')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <div class="card-header" style="background-color: #cca3ff;">
        <a href="{{route('sliders.list')}}" class="btn btn-primary btn-sm">Back</a>
        <x-slot:title>
        Slider Update
        </x-slot>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                @if (session('status'))
                    <h5 class="alert alert-success">{{session('status')}}</h5>
                @endif
                <div class="card">
                    <div class="card-body" style="background-color: #edeaff;">
                        <form action="{{ route('sliders.update', ['slider'=>$slider->id])}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="heading" style="margin: 10px 0;">Heading</label>
                                <input type="text" name="heading" value="{{$slider->heading}}" id="heading" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="description" style="margin: 10px 0;">Description</label>
                                <textarea name="description" id="description" cols="30" rows="4" class="form-control">{{$slider->description}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="image" style="margin: 10px 0;">Image Upload</label>
                                <input type="file" name="image" id="image" class="form-control">
                                <img src="{{asset('public/storage/slider/'.$slider->image)}}" width="100px" alt="Slider Image" srcset="">
                            </div>
                            <div class="form-group">
                                <label for="status" style="margin: 10px 0;">Status: </label>
                                <input type="checkbox" name="status" id="status" {{$slider->status == '1' ? 'checked':''}}> 0=visible, 1=hidden
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>

        </div>
    </div>

</x-backend.layouts.master>