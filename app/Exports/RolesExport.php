<?php

namespace App\Exports;

use App\Models\Role;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;

class RolesExport implements FromView
{
    
    public function view(): View
    {
        return view('backend.role.excel', [
            'roles' => Role::all()
        ]);
    }
}
