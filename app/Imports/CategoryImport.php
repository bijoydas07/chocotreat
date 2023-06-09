<?php

namespace App\Imports;

use App\Models\Category;
use Maatwebsite\Excel\Concerns\ToModel;

class CategoryImport implements ToModel
{
    public function model(array $row)
    {
        return new Category([
            'title'=> $row[0],
            'description'=> $row[1], 
        ]);
    }
}
