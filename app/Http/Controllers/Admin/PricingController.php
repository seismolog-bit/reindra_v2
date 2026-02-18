<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pricing;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use Image;
use File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class PricingController extends Controller
{
    public function index()
    {
        $pricings = Pricing::orderBy('price', 'asc')->get();

        return view('admin.pricing', compact('pricings'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            // 'price' => 'required',
            'description' => 'required',
        ]);

        if ($request->id) {
            $pricing = Pricing::find($request->id);
            $image = $pricing->image;
        }

        if ($request->hasFile('image')) {
            $dir = 'images/pricings/';
            $file = $request->file('image');
            $extension = Str::lower($file->getClientOriginalExtension());
            $fileName = time() . '.' . $extension;
            $filePath = $dir . $fileName;

            // image resize
            $image_file = Image::make($file->getRealPath());
            $image_file->resize(300, null, function ($const) {
                $const->aspectRatio();
            });

            Storage::disk('public')->put($filePath, $image_file->encode());

            if ($request->id) {
                if ($pricing->image && Storage::disk('public')->exists($pricing->image)) {
                    Storage::disk('public')->delete($pricing->image);
                }
            }

            $image = $filePath;
        }

        Pricing::updateOrCreate([
            'id' => $request->id
        ], [
            'title' => $request->title,
            'price' => $request->price,
            'description' => $request->description,
            'recommended' => $request->recommended ? true : false,
            'image' => $image ?? null,
        ]);

        return redirect()->back()->with('success', 'Data saved successfully');
    }

    public function edit($id)
    {
        $pricing = Pricing::find($id);
        return response()->json($pricing);
    }

    public function destroy(Pricing $pricing)
    {
        if ($pricing->image && Storage::disk('public')->exists($pricing->image)) {
            Storage::disk('public')->delete($pricing->image);
        }

        $pricing->delete();

        return redirect()->back();
    }
}
