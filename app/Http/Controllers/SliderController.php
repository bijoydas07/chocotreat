<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use Spatie\Backtrace\File;

class SliderController extends Controller
{
    public function index()
    {
        
        $sliders = Slider::all();
        return view('backend.slider.index', compact('sliders'));
    }

    public function create()
    {
        return view('backend.slider.create');
    }

    public function store(Request $request)
    {
        $slider = new Slider;
        $slider->heading =$request->input('heading');
        $slider->description =$request->input('description');
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('public/storage/slider/',$filename);
            $slider->image = $filename;
        }

        $slider->status = $request->input('status') == true ? '1':'0';
        $slider->save();
        return redirect()->back()->with('status','Slider create successfully');
    }

    public function edit(Slider $slider)
    {
        //$slider = Slider::find($id);
        return view('backend.slider.edit', compact('slider'));
    }

    public function update(Request $request, $id)
    {
        $slider = Slider::find($id);
        $slider->heading =$request->input('heading');
        $slider->description =$request->input('description');
        if($request->hasfile('image'))
        {
            $destination = 'public/storage/slider/'.$slider->image;
            // if(File::exists($destination))
            // {
            //     File::delete($destination);
            // }
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('public/storage/slider/',$filename);
            $slider->image = $filename;
        }

        $slider->status = $request->input('status') == true ? '1':'0';
        $slider->save();
        return redirect()->back()->with('status','Slider update successfully');
    }
}
