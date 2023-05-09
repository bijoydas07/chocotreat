<x-backend.layouts.master>

<div class="row">
    <div class="col-xl-3 col-md-6">
        <div class="card bg-primary text-white mb-4">
            <x-backend.layouts.partials.elements.primary/>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card bg-warning text-white mb-4">
            <x-backend.layouts.partials.elements.warning/>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card bg-success text-white mb-4">
            <x-backend.layouts.partials.elements.success/>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card bg-danger text-white mb-4">
            <x-backend.layouts.partials.elements.danger/>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xl-6">
        <x-backend.layouts.partials.charts.area_chart/>
    </div>
    <div class="col-xl-6">
        <x-backend.layouts.partials.charts.bar_chart/>
</div>

</x-backend.layouts.master>