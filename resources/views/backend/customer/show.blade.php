<x-backend.layouts.master>
    <x-slot:page_title>
        Customer-Show
    </x-slot>
<div class="card mb-4">
    <div class="card-header" style="background-color: #cca3ff;">
        <a href="{{ route('customers.list')}}" class="btn btn-primary">List</a>
        <x-slot:title>
            Customer Show 
        </x-slot>
    </div>
    <div class="card-body" style="background-color: #ebdefd;">
        <h2>Name: {{ $customer->name }}</h2>
    </div>
</div>
</x-backend.layouts.master>