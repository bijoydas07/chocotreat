<x-backend.layouts.master>
    <x-slot:page_title>
        Product-Show
    </x-slot>
<div class="card mb-4">
    <div class="card-header" style="background-color: #cca3ff;">
        <a href="{{ route('products.list')}}" class="btn btn-primary">List</a>
        <x-slot:title>
            Product Show 
        </x-slot>
    </div>
    <div class="card-body" style="background-color: #ebdefd; display: grid; grid-template-columns: 3fr 1fr;
    gap: 2%; align-items: center;" >
        <div class="details">
            <h4>Name: {{ $product->name }}</h4> <hr>
            <h5>Price: {{ $product->price }} <span style="font-weight: 900;">&#2547;</span></h5> <hr>
            <h6>Category: {{ $product->category->title }}</h6> <hr>
            <p><span style="font-weight: bold;">Description:</span> {{ $product->description }}</p> 

            <table class="table table-bordered">
                <thead>
                    <tr style="border: 1px solid black;">
                        <th>Weight</th>
                        <th>Calories</th>
                        <th>Fat</th>
                        <th>Protein</th>
                        <th>Carbohydrates</th>
                        <th>Fibre</th>
                        <th>Salt</th>
                    </tr>
                </thead>
                <tbody>
                    <tr style="border: 1px solid black;">
                        <td> {{ $product->weight }} <span>G</span></td>
                        <td>{{ $product->calories }} <span>KCALS</span></td>
                        <td>{{ $product->fat }} <span>G(26.5G SATURATED)</span></td>
                        <td>{{ $product->protein }} <span>G</span></td>
                        <td>{{ $product->carbohydrates }} <span>G (29.8G SUGARS)</span></td>
                        <td>{{ $product->fibre }} <span>G</span></td>
                        <td>{{ $product->salt }} <span>G</span></td>
                    </tr>
                </tbody>
            </table>

        </div>
        <div class="image">
            <img src="{{asset('storage/products/'.$product->image)}}" class="rounded" alt="" height="300" width="300">
        </div>
    </div>
</div>
</x-backend.layouts.master>