<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ThemeCategory;
use Illuminate\Http\Request;

class ThemeCategoryController extends Controller
{
    public function index()
    {
        $themeCategories = ThemeCategory::orderBy('title', 'asc')->get();

        return view('admin.theme.category', compact('themeCategories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
        ]);

        ThemeCategory::updateOrCreate([
            'id' => $request->id
        ], [
            'title' => $request->title,
        ]);

        return redirect()->back()->with('success', 'Data saved successfully');
    }

    public function edit($id)
    {
        $themeCategory = ThemeCategory::find($id);
        return response()->json($themeCategory);
    }

    public function destroy(ThemeCategory $themeCategory)
    {
        $themeCategory->delete();

        return redirect()->back();
    }
}
