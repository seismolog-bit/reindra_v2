<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Technology;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

use Image;

class TechnologyController extends Controller
{
    public function index()
    {
        $technologies = Technology::orderBy('title')->get();

        return view('admin.apps.technology', compact('technologies'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'nullable'
        ]);

        // $image = '';

        if ($request->id) {
            $technology = Technology::find($request->id);
            $image = $technology->image;
        }

        if ($request->hasFile('image')) {
            $dir = 'images/technologies/';
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
                if ($technology->image && Storage::disk('public')->exists($technology->image)) {
                    Storage::disk('public')->delete($technology->image);
                }
            }

            $image = $filePath;
        }

        technology::updateOrCreate([
            'id' => $request->id
        ], [
            'title' => $request->title,
            'image' => $image ?? null,
        ]);

        return redirect()->back()->with('success', 'Data saved successfully');
    }

    public function edit($id)
    {
        $technology = technology::find($id);
        return response()->json($technology);
    }

    public function destroy(technology $technology)
    {
        if ($technology->image && Storage::disk('public')->exists($technology->image)) {
            Storage::disk('public')->delete($technology->image);
        }

        $technology->delete();

        return redirect()->back();
    }
}
