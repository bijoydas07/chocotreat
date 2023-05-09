<?php

namespace App\Exports;

use App\Models\Category;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;

class CategoriesExport implements FromView
{
    public function view(): View
    {
        return view('backend.category.excel', [
            'categories' => Category::all()
        ]);
    }
}
