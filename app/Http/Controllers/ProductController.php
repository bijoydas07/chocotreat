<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\Rule;
use Intervention\Image\Facades\Image;

class ProductController extends Controller
{
    
    public function index()
    {
        $products = Product::all();
        return view('backend.product.index', compact('products'));
    }


    public function create()
    {
        $categories = Category::all();
        return view('backend.product.create', compact('categories'));
    }


    public function store(ProductRequest $request)
    {

    try {
        Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'fdescription' => $request->fdescription,
            'price' => $request->price,
            'category_id' => $request->category,
            'calories' => $request->calories,
            'fat' => $request->fat,
            'protein' => $request->protein,
            'carbohydrates' => $request->carbohydrates,
            'fibre' => $request->fibre,
            'weight' => $request->weight,
            'salt' => $request->salt,
            'image' =>$this->uploadImage($request->file('image')),
        ]);
            return redirect()->route('products.list')->withMessage("Product created successfully!");
        }catch (\Throwable $th) {
            Log::error($th->getMessage());
            return redirect()->back()->withInput()->withErrors("Something went wrong.Please contact with Developer!");
        }
    }

    
    
    public function show(Product $product)
    {
        return view('backend.product.show', compact('product'));
    }

    
    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('backend.product.edit', compact('product','categories'));
    }

    
    public function update(ProductRequest $request, Product $product)
    {
        try {
            $requestData = [
                'name' => $request->name,
                'description' => $request->description,
                'fdescription' => $request->fdescription,
                'price' => $request->price,
                'category_id' => $request->category,
                'calories' => $request->calories,
                'fat' => $request->fat,
                'protein' => $request->protein,
                'carbohydrates' => $request->carbohydrates,
                'fibre' => $request->fibre,
                'weight' => $request->weight,
                'salt' => $request->salt,
            ];
            
            if($request->hasFile('image')){
                $requestData['image'] = $this->uploadImage(request()->file('image'));
            }

            $product->update($requestData);
            return redirect()->route('products.list')->withMessage("Product updat ed successfully!");

        }catch (\Throwable $th) {
            Log::error($th->getMessage());
            return redirect()->back()->withInput()->withErrors("Something went wrong.Please contact with Developer!");
        }
    }

    
    public function destroy(Product $product)
    {
        try {
            $product->delete();
            // return redirect()->route('products.list')->withMessage("Product successfully deleted!");
            return redirect()->back()->withMessage("Product successfully deleted!");

        } catch (\Throwable $th) {
            Log::error($th->getMessage());
            return redirect()->back()->withInput()->withErrors("Something went wrong.Please contact with Developer!");
        }
    }

    // Custom functions

    public function uploadImage($file)
    {
        $fileName = time().'.'.$file->getClientOriginalExtension();
        Image::make($file)->resize(300, 200)->save(storage_path().'/app/public/products/'.$fileName);
        return $fileName;
    }

    public function trash()
    {
        $trashData = Product::onlyTrashed()->get();
        return view('backend.product.trash', compact('trashData'));
    }

    public function restore($id)
    {
        $restore = Product::onlyTrashed()->findOrFail($id);
        $restore->restore();
        return redirect()->route('products.trash')->withMessage("Product successfully restore!");
    }

    public function delete($id)
    {
        try {
            $delete = Product::onlyTrashed()->findOrFail($id);
            $delete->forceDelete();
            return redirect()->route('products.trash')->withMessage("Product successfully permanently deleted!");

        } catch (\Throwable $th) {
            Log::error($th->getMessage());
            return redirect()->back()->withInput()->withErrors("Something went wrong.Please contact with Developer!");
        }
    }

}
