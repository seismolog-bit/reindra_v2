<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ThemeTag;
use Illuminate\Http\Request;

class ThemeTagController extends Controller
{
    public function index()
    {
        $themeTags = ThemeTag::orderBy('title', 'asc')->get();

        return view('admin.theme.tag', compact('themeTags'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
        ]);

        ThemeTag::updateOrCreate([
            'id' => $request->id
        ], [
            'title' => $request->title,
        ]);

        return redirect()->back()->with('success', 'Data saved successfully');
    }

    public function edit($id)
    {
        $themeTag = ThemeTag::find($id);
        return response()->json($themeTag);
    }

    public function destroy(ThemeTag $themeTag)
    {
        $themeTag->delete();

        return redirect()->back();
    }
}
