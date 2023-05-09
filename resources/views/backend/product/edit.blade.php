<x-backend.layouts.master>
    <x-slot:page_title>
        Product Update
    </x-slot>
    <hr>
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
        <a href="{{ route('products.list')}}" class="btn btn-primary">List</a>
        <x-slot:title>
        Product Create
        </x-slot>
    </div>
    <div class="card-body" style="background-color: #ebdefd;">
        <form action="{{ route('products.update', ['product'=>$product->id])}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('patch')
            <div class="mb-3 name">
                <label for="name" class="form-label">Name<span style="color: red">*</span></label>
                <input type="text" class="form-control" name="name" id="name" value="{{old('name',$product->name)}}" aria-describedby="name">
            </div>
            <div class="short-details" style="display: grid; grid-template-columns: 1fr 1fr; gap: 2%;">
                <div class="mb-3 price">
                    <label for="price" class="form-label">Price<span style="color: red">*</span></label>
                    <input type="text" class="form-control" name="price" id="price" value="{{old('price',$product->price)}}" aria-describedby="price">
                </div>
                <div class="mb-3 category">
                    <label for="category" class="form-label">Category<span style="color: red">*</span></label>
                    <select class="form-select" name="category" aria-label="Default select example">
                        <option disabled>Select Category</option>
                        @foreach ($categories as $category)
                        <option @selected($category->id == $product->category_id) value="{{old('category', $category->id)}}">{{$category->title}}</option>
                        @endforeach
                    </select>
                </div>

            </div>
            
            <div class="mb-3 description">
                <label for="description" class="form-label">Description<span style="color: red">*</span></label>
                <textarea name="description" id="description" cols="30" rows="3" class="form-control">{{old('description',$product->description)}}</textarea>
            </div>
            <div class="short-details" style="display: grid; grid-template-columns: 1fr 1fr; gap: 2%;">
                <div class="mb-3 image">
                    <label for="file" style="margin-bottom: 8px;">Image<span style="color: red">*</span></label>
                    <img src="{{asset('storage/products/'.$product->image)}}" alt="" height="120" width="150">
                    <input type="file" name="image" id="file">
                </div>
                <div class="mb-3 weight">
                    <label for="weight" class="form-label">Weight</label>
                    <input type="weight" class="form-control" name="weight" id="weight" value="{{old('weight',$product->weight)}}" aria-describedby="weight">
                </div>
                <div class="mb-3 calories">
                    <label for="calories" class="form-label">Calories</label>
                    <input type="text" class="form-control" name="calories" id="calories" value="{{old('calories',$product->calories)}}" aria-describedby="calories">
                </div>
                <div class="mb-3 fat">
                    <label for="fat" class="form-label">Fat</label>
                    <input type="fat" class="form-control" name="fat" id="fat" value="{{old('fat',$product->fat)}}" aria-describedby="fat">
                </div>
                <div class="mb-3 protein">
                    <label for="protein" class="form-label">Protein</label>
                    <input type="protein" class="form-control" name="protein" id="protein" value="{{old('protein',$product->protein)}}" aria-describedby="protein">
                </div>
                <div class="mb-3 carbohydrates">
                    <label for="carbohydrates" class="form-label">Carbohydrates</label>
                    <input type="carbohydrates" class="form-control" name="carbohydrates" id="carbohydrates" value="{{old('carbohydrates',$product->carbohydrates)}}" aria-describedby="carbohydrates">
                </div>
                <div class="mb-3 fibre">
                    <label for="fibre" class="form-label">Fibre</label>
                    <input type="fibre" class="form-control" name="fibre" id="fibre" value="{{old('fibre',$product->fibre)}}" aria-describedby="fibre">
                </div>
                <div class="mb-3 salt">
                    <label for="salt" class="form-label">Salt</label>
                    <input type="salt" class="form-control" name="salt" id="salt" value="{{old('salt',$product->salt)}}" aria-describedby="salt">
                </div>
            </div>
            <button type="submit" class="btn btn-primary" style="margin-top: 3%;">Update</button>
        </form>
    </div>
</div>
<hr>
</x-backend.layouts.master>