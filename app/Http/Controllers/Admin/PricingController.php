<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pricing;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use Image;
use File;
use Illuminate\Support\Facades\Validator;

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
            'price' => 'required',
            'description' => 'required',
        ]);

        if ($request->id) {
            $pricing = Pricing::find($request->id);
            $image = $pricing->image;
        }

        if ($request->image) {
            $dir = 'images/pricings/';
            $url = $request->file('image');
            $extention = Str::lower($url->getClientOriginalExtension());
            $file_name = time() . '.' . $extention;

            // image resize
            $image_file = Image::make($url->getRealPath());
            $image_file->resize(720, null, function ($const) {
                $const->aspectRatio();
            });

            $destination_path = public_path($dir);
            $url->move($destination_path, $file_name);

            if ($request->id) {
                if (File::exists($pricing->image)) {
                    File::delete($pricing->image);
                }
            }

            $image = $dir . $file_name;
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
        if (File::exists($pricing->image)) {
            File::delete($pricing->image);
        }

        $pricing->delete();

        return redirect()->back();
    }
}
