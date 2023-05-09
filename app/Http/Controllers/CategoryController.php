<?php

namespace App\Http\Controllers;

use App\Exports\CategoriesExport;
use App\Http\Requests\CategoryRequest;
use App\Imports\CategoryImport;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Validation\Rule;

class CategoryController extends Controller
{
    public function index()
    {
        if (request('keyword')) {
            $categories = Category::latest()->where('title', 'Like', '%'.request('keyword').'%')->paginate(5);
        }else {
            $categories = Category::latest()->paginate(5);
        }
        return view('backend.category.index',['categories'=>$categories]);
    }

    public function create()
    {
        $this->authorize('create-category');
        return view('backend.category.create');
    }

    public function store(CategoryRequest $request)
    {
        
        try {
            Category::create([
                'title' => $request->title,
                'description' => $request->description,
                // 'image' => $request->image,
            ]);
            return redirect()->route('categories.list')->withMessage("Category created successfully!");

        } catch (\Throwable $th) {
            Log::error($th->getMessage());
            return redirect()->back()->withInput()->withErrors("Something went wrong.Please contact with Developer!");
        }
    }

    // public function show(Category $category)
    // {
    //     return view('backend.category.show', ['category'=>$category]);
    // }

    public function edit(Category $category)
    {
        return view('backend.category.edit', compact('category'));
    }

    public function update(CategoryRequest $request, Category $category)
    { 
        try {
            $category->update([
                'title' => $request->title,
                'description' => $request->description,
                // 'image' => $request->image,
            ]);
            return redirect()->route('categories.list')->withMessage("Category successfully updated!");

        } catch (\Throwable $th) {
            Log::error($th->getMessage());
            return redirect()->back()->withInput()->withErrors("Something went wrong.Please contact with Developer!");
        }
    }

    public function destroy(Category $category)
    {
        try {
            $category->delete();
            return redirect()->route('categories.list')->withMessage("Category successfully deleted!");

        } catch (\Throwable $th) {
            Log::error($th->getMessage());
            return redirect()->back()->withInput()->withErrors("Something went wrong.Please contact with Developer!");
        }
    }
    // For pdf method
    public function categoryPdf()
    {
        try {
            $categories = Category::all();
            $fileName = 'categories.pdf';
            $html = view('backend.category.pdf', compact ('categories'))->render();
            $mpdf = new \Mpdf\Mpdf();
            $mpdf->WriteHTML($html);
            $mpdf->Output($fileName, 'I');

        } catch (\Throwable $th) {
            dd($th->getMessage());
        }
    }
    
    // For Excel export method
    public function export() 
    {
        return Excel::download(new CategoriesExport, 'categories.xlsx');
        
    }

   // For Excel import method

    public function import( Request $request) 
    {
        Excel::import(new CategoryImport, $request->file('file'));

        return redirect()->route('categories.list')->with('Success', 'Categories import successfully');
    }
    
    public function productsList(Category $category)
    {
        $products = Product::where('category_id',$category->id)->get();
        return view('backend.category.show', compact('products'));
    }

}
