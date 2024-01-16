<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Theme;
use App\Models\ThemeCategory;
use App\Models\ThemeTag;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use Image;
use File;

class ThemeController extends Controller
{
    public function index()
    {
        $themes = Theme::orderBy('title', 'asc')->get();
        $theme_tags = ThemeTag::orderBy('title', 'asc')->get();
        $theme_categories = ThemeCategory::orderBy('title', 'asc')->get();

        return view('admin.theme.index', compact('themes', 'theme_tags', 'theme_categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'url' => 'required',
            'theme_category' => 'required',
        ]);

        if ($request->id) {
            $theme = Theme::find($request->id);
            $image = $theme->image;
        }

        if ($request->image) {
            $dir = 'images/themes/';
            $url = $request->file('image');
            $extention = Str::lower($url->getClientOriginalExtension());
            $file_name = time() . '.' . $extention;

            // image resize
            $image_file = Image::make($url->getRealPath());
            $image_file->resize(300, null, function ($const) {
                $const->aspectRatio();
            });

            $destination_path = public_path($dir);
            $url->move($destination_path, $file_name);

            if ($request->id) {
                if (File::exists($theme->image)) {
                    File::delete($theme->image);
                }
            }

            $image = $dir . $file_name;
        }

        Theme::updateOrCreate([
            'id' => $request->id
        ], [
            'title' => $request->title,
            'url' => $request->url,
            'theme_category' => $request->theme_category,
            'theme_tags' => $request->theme_tags,
            'image' => $image,
            'description' => $request->description,
        ]);

        return redirect()->back()->with('success', 'Data saved successfully');
    }

    public function edit($id)
    {
        $theme = Theme::find($id);
        return response()->json($theme);
    }

    public function destroy(Theme $theme)
    {
        if (File::exists($theme->image)) {
            File::delete($theme->image);
        }

        $theme->delete();

        return redirect()->back();
    }
}
