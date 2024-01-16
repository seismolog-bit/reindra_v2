<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use App\Models\PortfolioCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use Image;
use File;

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolios = Portfolio::orderBy('year', 'asc')->get();

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

        if($request->image)
        {
            $dir = 'images/porfolios/';
            $url = $request->file('image');
            $extention = Str::lower($url->getClientOriginalExtension());
            $file_name = time() . '.' . $extention;

            // image resize
            $image_file = Image::make($url->getRealPath());
            $image_file->resize(300, null, function($const) {
                $const->aspectRatio();
            });

            $destination_path = public_path($dir);
            $url->move($destination_path, $file_name);

            $image = $dir . $file_name;
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

        if($request->image)
        {
            $dir = 'images/porfolios/';
            $url = $request->file('image');
            $extention = Str::lower($url->getClientOriginalExtension());
            $file_name = time() . '.' . $extention;

            // image resize
            $image_file = Image::make($url->getRealPath());
            $image_file->resize(300, null, function($const) {
                $const->aspectRatio();
            });

            $destination_path = public_path($dir);
            $url->move($destination_path, $file_name);

            $image = $dir . $file_name;

            // menghaspus file
            if (File::exists($portfolio->image)) {
                File::delete($portfolio->image);
            }
        }

        $portfolio->title = $request->title;
        $portfolio->work = $request->work;
        $portfolio->image = $request->image ? $image : $portfolio->image;
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
        if (File::exists($portfolio->image)) {
            File::delete($portfolio->image);
        }

        $portfolio->delete();

        return redirect()->back()->with('success', 'Deleted successfully');
    }
}
