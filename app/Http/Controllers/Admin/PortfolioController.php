<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use App\Models\PortfolioCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use Image;
use File;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
{
    public function index(Request $request)
    {
        $query = Portfolio::query();

        // dd($request->all());

        if ($request->has('search')) {
            $query->where('title', 'like', '%' . $request->search . '%');
        }

        $portfolios = $query->orderBy('title')->get();

        // dd($portfolios);

        return view('admin.portfolio.index', compact('portfolios'));
    }

    public function create()
    {
        $categories = PortfolioCategory::orderBy('title', 'asc')->get();

        return view('admin.portfolio.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'year' => 'required',
            'tech' => 'required',
            'work' => 'required',
            'portfolio_categories' => 'required'
        ]);

        if ($request->hasFile('image')) {
            $dir = 'images/porfolios/';
            $file = $request->file('image');
            $extention = Str::lower($file->getClientOriginalExtension());
            $file_name = time() . '.' . $extention;
            $filePath = $dir . $file_name;

            // image resize
            $image_file = Image::make($file->getRealPath());
            $image_file->resize(1080, null, function ($const) {
                $const->aspectRatio();
            });

            Storage::disk('public')->put($filePath, $image_file->encode());

            $image = $filePath;
        }

        $portfolio = $request->all();
        $portfolio['image'] = $image ?? null;

        Portfolio::create($portfolio);

        return redirect()->route('admin.portfolio.index')->with('success', 'Saved data successfully');
    }

    public function edit(Portfolio $portfolio)
    {
        $categories = PortfolioCategory::orderBy('title', 'asc')->get();

        return view('admin.portfolio.edit', compact('portfolio', 'categories'));
    }

    public function update(Request $request, Portfolio $portfolio)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'year' => 'required',
            'tech' => 'required',
            'work' => 'required',
            'portfolio_categories' => 'required'
        ]);

        $image = $portfolio->image;

        if ($request->hasFile('image')) {
            $dir = 'images/porfolios/';
            $file = $request->file('image');
            $extention = Str::lower($file->getClientOriginalExtension());
            $file_name = time() . '.' . $extention;
            $filePath = $dir . $file_name;

            // image resize
            $image_file = Image::make($file->getRealPath());
            $image_file->resize(1080, null, function ($const) {
                $const->aspectRatio();
            });

            Storage::disk('public')->put($filePath, $image_file->encode());

            $image = $filePath;

            // menghaspus file
            if ($portfolio->image && Storage::disk('public')->exists($portfolio->image)) {
                Storage::disk('public')->delete($portfolio->image);
            }
        }

        $portfolio->title = $request->title;
        $portfolio->work = $request->work;
        $portfolio->image = $image;
        $portfolio->description = $request->description;
        $portfolio->year = $request->year;
        $portfolio->tech = $request->tech;
        $portfolio->portfolio_categories = $request->portfolio_categories;
        $portfolio->url = $request->url;

        $portfolio->save();

        return redirect()->route('admin.portfolio.index')->with('success', 'Saved data successfully');
    }

    public function destroy(Portfolio $portfolio)
    {
        if ($portfolio->image && Storage::disk('public')->exists($portfolio->image)) {
            Storage::disk('public')->delete($portfolio->image);
        }

        $portfolio->delete();

        return redirect()->back()->with('success', 'Deleted successfully');
    }
}
